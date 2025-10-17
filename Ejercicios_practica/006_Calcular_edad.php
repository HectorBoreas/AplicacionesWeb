<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula edad</title>
</head>
<body>
    <h1>¿¿Que edad tienes??</h1>
    <?php
    
    /*
    Escribe un script que lea una fecha de nacimiento y calcule la edad actual.
    Para calcular la edad, debemos calcular los años día y meses con la fecha actual.
    */

    /*$nacimieto = "1984-06-11";
    $fecha_nac = new DataTime($nacimieto);
    $fecha_actual = new DateTime(date('Y-m-d'));

    $edad = $fecha_actual->diff($fecha_nac);
    echo $edad->format("%y");*/
    
    //echo $fecha_actual->format('d-m-Y');
    //echo $fecha_nac->format('d-m-Y');
    $dia_actual = date('d');
    $mes_actual = date('m');
    $año_actual = date('Y');
    echo $año_actual;


    ?>
</body>
</html>