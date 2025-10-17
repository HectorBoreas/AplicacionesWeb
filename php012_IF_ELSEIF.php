<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de sentencia IF-ELSEIF</title>
</head>
<body>
    <h1>Uso de sentencia IF-ELSEIF</h1>
    <?php

        // Declaración de variables
        $num = rand(1,6);
        
        // Sentencias condicionales
        if ($num == 1) {
            echo "El valor de la variable num es igual a = UNO.";
        } elseif ($num == 2) {
            echo "El valor de la variable num es igual a = DOS.";
        }elseif ($num == 3) {
            echo "El valor de la variable num es igual a = TRES.";
        }else {
            echo "El valor de la variable num no es UNO ni DOS ni TRES";
        }


    ?>
</body>
</html>