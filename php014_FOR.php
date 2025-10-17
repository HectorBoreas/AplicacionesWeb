<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentencia FOR</title>
</head>
<body>
    <h1>Uso de sentencia FOR en PHP</h1>
    <p> Lista de los primeros 20 números </p>
    <?php

        /* 
            For (inst_inicialización;condición;inst_iteración) {
                Instrucciones del bucle; 
            }    
        */
        
        // Pintar los 20 primeros números
        for ($indice = 1; $indice <= 20; $indice = $indice + 1) {
            echo $indice . "<br>";
        }

        // Los diez primero números pares
        echo "<p> Los 10 primeros números pares </p>";
        for ($i = 2; $i <= 20; $i = $i +2) {
            echo $i . "<br>";
        }

        // Trato de hacerlo más elegante
        // Creo variables
        $num = 20;

        // Condicional dentro del for para que solo recorra los pares.
        echo "<p> Los 10 primeros números pares </p>";
        //for ($j = 1; $j <= $num; $j++) {
        //    if ($j % 2 == 0){
        //        echo $j . "<br>";
        //    }
        //}
    ?>
</body>
</html>