<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable no inizializadas</title>
</head>
<body>
    <h1>Variable no inizializadas</h1>
    <?php
    // Declaración de variables
    $var = 100;
    $var3 = 100 + $var2; // $var2 no existe, se toma como 0
    echo "$var3<br>"; // Muestra 100
    $var3 = 100 * $var2; // $var2 no existe, se toma como 0
    echo "$var3" ."<br>"; // Muestra 0
    ?>
</body>
</html>