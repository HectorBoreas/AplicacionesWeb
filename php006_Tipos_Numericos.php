<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Númericos</title>
</head>
<body>
    <h1>Tipos Númericos</h1>
    <?php

        //Declaración de variables
        $a = 0b100; // número en binario, para ello usamos 0b
        $b = 0b001;
        $c = $a + $b;

        echo "<p> La suma es = " .$c ."</p>";

        $d = 5/2;

        echo "<p> La división es = " .$d ."</p>";

        $e = 7.5;
        $f = (int)$e; // Casting a entero, se trunca a 7. Entre parentesis el tipo al que quieres convertir, no son funciones

        echo "<p> El número entero es = " .$f ."</p>";

        $g = 7e2; // e es 10 elevado a 2 en este caso

        echo "<p> La variable g es = " .$g ."</p>";

        $h = 7E2; // E mayúscula es lo mismo

        echo "<p> La variable h es = " .$h ."</p>";
    ?>
</body>
</html>