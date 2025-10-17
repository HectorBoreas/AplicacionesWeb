<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaración de cadenas en PHP</title>
</head>
<body>
    <h1>Declaración de cadenas en PHP</h1>
    <?php

        // Declaración de variables
        $nombre = "Federico";
        $saludo = "Hola $nombre <br>";
        echo $saludo;
        $saludo2 = "Hola " .$nombre ."<br>";
        echo $saludo2;
        $saludo3 = 'Hola $nombre <br>';
        echo $saludo3;
        $saludo4 = 'Hola ' .$nombre .'<br>';
        echo $saludo4;

    ?>
</body>
</html>