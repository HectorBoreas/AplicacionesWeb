# programa_lambda_loop.py
import requests
import json

# URL de tu API Gateway
url = "https://cfhunseiri.execute-api.us-east-1.amazonaws.com/default/Hellolamda"

def main():
    while True:
        nombre = input("Escribe tu nombre (o 'salir' para terminar): ")
        if nombre.lower() == "salir":
            print("Saliendo...")
            break

        # Crear el JSON para enviar en POST
        data = {"nombre": nombre}

        try:
            response = requests.post(url, json=data)
            print("Status Code:", response.status_code)
            print("Respuesta:", response.text)
        except requests.exceptions.RequestException as e:
            print("Ocurrió un error al llamar al endpoint:", e)

if __name__ == "__main__":
    main()