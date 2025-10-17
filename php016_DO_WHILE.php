<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia DO-WHILE</title>
</head>
<body>
    <h1>Uso de la sentencia DO-WHILE en PHP</h1>
    <p> Lista de los primeros 20 números </p>
    <?php

    /*Lista de los primero 20 números */
    // inicializar indice
    $indice = 1;

    do {
        echo "$indice <br>";
        $indice++;
    } while ($indice <= 20)
    

    ?>
</body>
</html>