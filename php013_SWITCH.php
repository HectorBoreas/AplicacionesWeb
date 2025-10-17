<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia condicional SWITCH</title>
</head>
<body>
    <h1>Sentencia condicional SWITCH</h1>
    <?php

        // Declaración de variables
        $num = rand(1,3);
        
        // Sentencias condicionales
        switch ($num) {
            case 1: {
                echo "El valor de la variable num es UNO.";
                break;
            }
            case 2: {
                echo "El valor de la variable num es DOS.";
                break;
            }
            default: // Como en if, si solo tiene una instrucción, obviamos los corchetes
                echo "El valor de la variable num NO es no UNO ni DOS";
        }


    ?>
</body>
</html>