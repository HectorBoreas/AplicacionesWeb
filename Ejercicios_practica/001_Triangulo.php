<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador areas</title>
</head>
<body>
    <h1>Calcula el área de un triángulo</h1>
    <?php

    /* Crea un programa que calcule el área de un triángulo a partir de su base y
    altura. 
    Para calcular el área, vamos a usar la formula genérica, sin importar el tipo de triángulo.
    Área = (base * altura)/2
    */
    
    // De momento los datos los pondré a mano sin pedir los datos al usuario.
    $base = 10;
    $altura = 20;
    
    $area = ($base * $altura * 0.5);

    echo "El área del triángulo con base $base, altura $altura es: $area";
    // Faltaría pedir los datos.
    ?>
</body>
</html>