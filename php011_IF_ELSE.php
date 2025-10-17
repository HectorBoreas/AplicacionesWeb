<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de sentencia IF-ELSE</title>
</head>
<body>
    <h1>Uso de sentencia IF-ELSE</h1>
    <?php

        // Declaración de variables
        $num = rand(-3,4);
        
        // Sentencias condicionales
        if ($num < 0) {
            echo "El valor de la variable num = $num es menor que cero.";
        } else {
            echo "El valor de la variable num = $num es igual o mayor que cero.";
        }


    ?>
</body>
</html>