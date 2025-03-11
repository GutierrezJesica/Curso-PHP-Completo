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