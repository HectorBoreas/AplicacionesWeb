<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor ºC ºF</title>
</head>
<body>
    <h1>Conversor de grados Celsius a grados Fahrenheit.</h1>
    <?php

    /* 
    Para convertir los grados Celsius a Fahrenheit debemos multiplicar por 9/5 y sumar 32.
    */
    
    // De momento los datos los pondré a mano sin pedir los datos al usuario.
    $celsius = 15.6;
        
    $fahr = ($celsius * (9/5) + 32);

    echo "La temperatura en grados Celsius $celsius ºC, es equivalente a: $fahr ºF";
    // Faltaría pedir los datos.
    ?>
</body>
</html>