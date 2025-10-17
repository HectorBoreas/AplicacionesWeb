from datetime import datetime
from PIL import Image  #pip install pillow
from io import BytesIO
import requests #python -m pip install requests
import json

def pedir_fecha():
    """
    Pide al usuario una fecha en formato YYYY-MM-DD o deja vacío para hoy.
    Convierte cadena vacía a None y valida el formato de la fecha.
    """
    fecha_input = input("Introduce una fecha (YYYY-MM-DD) o deja vacío para hoy: ").strip()
    if not fecha_input:
        return None
        #None es una constante especial que representa la ausencia de un valor, o sea, “nada”.
        #None es el equivalente a null en Java, None en SQL, o nil en otros lenguajes.

    try:
        # Intentamos convertir la fecha a datetime para validar el formato
        datetime.strptime(fecha_input, "%Y-%m-%d")
        return fecha_input
    except ValueError:
        print("Formato de fecha incorrecto. Usa YYYY-MM-DD.")
        return pedir_fecha()  # Pedimos de nuevo recursivamente


def obtener_apod(fecha): 
    api_key = "HaTAg5uRA15AkQvCEslTEBh1bqQa4hmEhgMoxoNH"
    url = "https://api.nasa.gov/planetary/apod"

    #Construimos nuestro diccionario (clave->valor)
    parametros = {"api_key": api_key}
    #Si el if se cumple, esta línea añade un nuevo par clave→valor al diccionario params
    #{'api_key': 'DEMO_KEY', 'date': '2025-10-01'}
    if fecha:
        parametros["date"] = fecha
    

    #Hacemos la petición HTTP GET
    response = requests.get(url, params=parametros)

    #https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=2025-10-01

    """
La función requests.get() sirve para hacer una petición HTTP GET, igual que si escribieras una URL en tu navegador.
Pero además, le puedes pasar argumentos adicionales, como:
    params → los parámetros de la URL (?clave=valor)
    headers → cabeceras HTTP
    data o json → cuerpo del mensaje (para POST o PUT)
"""
    #Si la respuesta es correcta
    if response.status_code == 200:
        data = response.json() 
        return data
    else:
        print("Error al consultar la API: ", response.satatus_code)
        print(response.text)
        return None

def mostrar_imagen(datos):
    imagen_url = datos.get("url", datos.get("url"))
    response = requests.get(imagen_url)
    image = Image.open(BytesIO(response.content))
    image.show()
    
def main():
    print("=== NASA Astronomy Picture of the Day ===")

    while True:
        # Menú inicial
        print("1. Solicita una foto")
        print("2. Salir")
        opcion_inicial = input("Introduce una opción (1-2): ").strip() #quita los espacios al inicio y al final de la cadena.

        if opcion_inicial == "2":
            print("Saliendo...")
            break
        elif opcion_inicial == "1":
            # Pedimos fecha y consultamos API
            fecha = pedir_fecha()
            datos = obtener_apod(fecha)

            if not datos:
                print("No se pudieron obtener los datos de la API. \n")
                continue

            # Menú para elegir mostrar JSON o imagen
            while True:
                print("\n¿Qué quieres hacer con esta petición")
                print("1. Ver toda la respuesta en el JSON")
                print("2. Ver la foto")
                opcion = input("Introduce una opción (1-2): ").strip() #quita los espacios al inicio y al final de la cadena.

                if opcion == "1":
                    print("\n=== JSON completo ===")
                    print(f"\n{datos}\n")
                    break
                elif opcion == "2":
                    print("\nMostrando la imagen...")
                    mostrar_imagen(datos)
                    break
                else:
                    print("Opción no válida. Intenta de nuevo.")
        else:
            print("Opción no válida. Intenta de nuevo.")

if __name__ == "__main__":
    main() 

