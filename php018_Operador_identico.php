<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador idéntico.</title>
</head>
<body>
    <h1>Uso del Operador idéntico en PHP</h1>
    <?php

    $a = 9;
    $b = 9.0;

    if ($a == $b){
        echo "Las variables \$a y \$b son iguales. <br>"; // antes de la variable \ para escapar
    }else{
        echo "Las variables \$a y \$b NO son iguales. <br>";
    }

    if ($a === $b){
        echo "Las variables \$a y \$b son idénticas. <br>"; // antes de la variable \ para escapar
    }else{
        echo "Las variables \$a y \$b NO son idénticas. <br>";
    }
    
    

    ?>
</body>
</html>