<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dame el número mayor</title>
</head>
<body>
    <h1>Dame el número mayor</h1>
    <?php

        // Declaración de variables
        $num1 = 1;
        $num2 = 4;
        $num3 = 7;
        $num4 = 9;

        $mayor = $num1;
        
        
        // Sentencias condicionales
        if ($num2 > $mayor) {
           $mayor = $num2;
        }
        if ($num3 > $mayor) {
            $mayor = $num3;
        }
        if ($num4 > $mayor) {
            $mayor = $num4;
        }
        // Mostramos el mayor
        echo " El número mayor es $mayor"
        
        


    ?>
</body>
</html>