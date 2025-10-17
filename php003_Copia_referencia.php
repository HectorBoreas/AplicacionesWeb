<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación por copia y por referencia</title>
</head>
<body>
    <h1>Asignación por copia y por referencia</h1>
    <?php
    // declaración de variables
    $var1 = 100;
    $var2 = &$var1; // asignación por referencia
    $var3 = $var1; // asignación por copia
    echo "var2 = $var2<br>"; //muestra 100
    $var2 = 300; //Cambia el valor de var2
    echo "var1 = $var1<br>"; // $var1 también cambia
    $var3 = 400; // este cambio no afecta a var1
    echo "var1 = $var1<br>";
    echo "var2 = $var2<br>";
    echo "var3 = $var3<br>";
    ?>
</body>
</html>