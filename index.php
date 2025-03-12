<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colores = [
        ["codigo" => "#A00001", "nombre" => "Rojo-Ruby"], // array anidado en otro array
        ["codigo" => "#A00002", "nombre" => "Verde-Esmeralda"],
        ["codigo" => "#A00003", "nombre" => "Azul-Peltre"]
    ];
    foreach($colores as $cod) {
        echo $cod["codigo"]. "<br>";
        echo $cod["nombre"]. "<br>";
    }
    include "funciones.php";
    echo "El promedio es: ".promedio_alumno(2, 6, 8);
    ?>
</body>
</html>