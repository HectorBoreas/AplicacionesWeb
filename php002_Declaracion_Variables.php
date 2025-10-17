<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Datos</title>
</head>
<body>
    <h1>Ejemplo de declaración de variables</h1>
    <?php
    /*Declaración de variables*/
    $entero = 4; // tipo entero
    $numero = 4.5; // tipo coma flotante
    $cadena = "Esto es una cadena"; // tipo cadena de caracteres
    $cierto = TRUE; // tipo booleano
    $falso = FALSE;

    /*Mostrar los valores de las variables definidas*/
    echo "entero = $entero <br>";
    echo "numero = $numero <br>";
    echo "cadena = $cadena <br>";
    echo "falso = $falso <br>";
    echo "cierto = $cierto <br><br>";

    /*Cambio el tipo de variable */
    $a = 5;
    echo "La variable \$a = $a es de tipo: ".gettype($a)."<br>";
    $a = "Ahora a tiene una cadena de caracteres"; //cambia a cadena
    echo "La variable\$a = $a es de tipo: ".gettype($a);
    ?>
</body>
</html>