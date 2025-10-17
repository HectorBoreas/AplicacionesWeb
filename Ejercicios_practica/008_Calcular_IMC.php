<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <h1>Calcula el índice de masa corporal (IMC) a partir de la altura y el peso del usuario.</h1>
    
    <?php

    /*El Índice de Masa Corporal (IMC) se calcula dividiendo el peso en kilogramos entre la altura en metros elevada al cuadrado, expresado matemáticamente como 
    IMC= peso (kg) /altura (m)**2 
    ​ */    
    $peso = 85;
    $altura = 1.74;

    $IMC = round($peso / ($altura ** 2),2);

    echo "El índice de masa corporal de una persona que pese $peso kg y una altura de $altura m es : <br><br>" . "<b>$IMC</>";


    ?>
</body>
</html>