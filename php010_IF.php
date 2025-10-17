<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de sentencia IF</title>
</head>
<body>
    <h1>Uso de sentencia IF</h1>
    <?php

        // Declaración de variables
        $numero = rand(0,3); // Le pongo un número aleatorio
        
        // Sentencias condicionales
        // Si la condición es una sola línea no son necesarios los corchetes
        if ($numero > 0) echo "El valor de la variable numero = $numero es mayor que cero.";
        if ($numero < 0) echo "El valor de la variable numero = $numero es menor que cero.";
        if ($numero == 0) echo "El valor de la variable numero = $numero cero.";


    ?>
</body>
</html>