<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    require "include.php";

    foreach($colores as $cod) {
        echo $cod["codigo"]. "<br>";
        echo $cod["nombre"]. "<br>";
    };
    ?>

</body>
</html>



