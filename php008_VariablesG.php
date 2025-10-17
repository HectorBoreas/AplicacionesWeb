<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Globales</title>
</head>
<body>
    <h1>Variables Globales</h1>
    <?php

        // Declaración de variables
        echo "<p><b>Ruta dentro de htdocs: </b>" .$_SERVER["PHP_SELF"] ."</p>";
        echo "<p><b>Nombre del servidor: </b>" .$_SERVER["SERVER_NAME"] ."</p>";
        echo "<p><b>Software del servidor: </b>" .$_SERVER["SERVER_SOFTWARE"] ."</p>";
        echo "<p><b>Protocolo: </b>" .$_SERVER["SERVER_PROTOCOL"] ."</p>";
        echo "<p><b>Método de la petición: </b>" .$_SERVER["REQUEST_METHOD"] ."</p>";
        
        # Esto es un comentario
    ?>
</body>
</html>