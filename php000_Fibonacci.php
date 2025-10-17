<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h1>Secuencia de Fibonacci</h1>
    <?php
        // defino limite
        $limite = 10;
        // Establecer los 2 primeros números
        $fibonacci = [0,1];

        // Vamos añadiendo números a la lista
        for ($i=2; $i < $limite; $i++) { 
            $fibonacci[$i] = $fibonacci[$i-2] + $fibonacci[$i-1];
        }

        // Mostrar la información
        echo "Los $limite primeros números de la serie de Fibonacci son: <br><br>";
        foreach ($fibonacci as $numero){
            echo $numero . ", "; 
        }
    ?>
</body>
</html>