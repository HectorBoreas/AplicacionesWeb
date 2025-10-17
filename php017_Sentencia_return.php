<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia Return</title>
</head>
<body>
    <h1>Uso de la sentencia Return en PHP</h1>
    <?php

    $num = 9;
    if ($num == 9){
        echo "El número es 9";
        return; // si entra en la condición return acaba el programa
    }
    echo "Estoy después del IF";
    
    

    ?>
</body>
</html>