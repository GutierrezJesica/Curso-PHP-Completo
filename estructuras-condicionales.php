<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (0 >= 3) { ?>
        <h1>Verdadero</h1>
    <?php }else { ?>
        <h1>Falso</h1>
    <?php }
    ?>

</body>
</html> -->

<?php

/* $edad = 21;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
} */

//-----------------------------------------

/* $total = 120;

if($total > 100) {
    $total = $total - ($total * 0.20); // si total es mayor a 100 tiene un descuento del 20%
}

echo "El total es de: $" . $total; */

//----------------------------------------- OPERADOR TERNARIO

/* $total = (2 > 7) ? 10 * 7 : 10 * 5;

echo $total; */

/* $camisas = 2;
$precio = 10;

$total = $precio * $camisas;

$total = ($camisas >= 3) ? $total - ($total * 0.20) : $total - ($total * 0.10);

echo "El total a pagar es de: $" . $total; */

//--------------------------------------- ANIDADAS

/* $edad = 63;
$genero = "M";

if($genero == "M") {
    if($edad >= 60) {
        echo "Eres Hombre mayor de 60, puedes jubilarte";
    }else{
        echo "Eres hombre menor de 60, no puedes jubilarte";
    }
}elseif($genero == "F") {
    if($edad >= 54) {
        echo "Eres Mujer mayor de 54, puedes jubilarte";
    }else{
        echo "Eres mujer menor de 54, no puedes jubilarte";
    }
}else{
    echo "Coloque una opción valida";
} */

//--------------------------------------- SWITCH

/* $fruta = "manzana";

switch($fruta) {
    case "manzana":
        echo "Eres manzana";
        break;
    case "pera":
        echo "Eres pera";
        break;
    case "banana":
        echo "Eres banana";
        break;
    default:
        echo "No eres ni manzana ni pera ni banana";
        break;
} */

/* $dia = 3;

switch($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "No es un dia de la semana";
        break;
} */

//--------------------------------------- MATCH

/* $a = 7;

$x = 10;
$y = 9;
$z = 7;

$resultado = match($a) {
    $x => "Valor igual a x",
    $y => "Valor igual a y",
    $z => "Valor igual a z",
    default => "No es ninguno de los anteriores"
};

echo $resultado; */

/* $edad = 73;

$resultado = match(true) {
    $edad >= 60 => "Eres de la tercera edad",
    $edad >= 30 => "Eres un adulto",
    $edad >= 18 => "Eres mayor de edad",
    default => "Eres un niño"
};

echo $resultado; */

//--------------------------------------- ESTRUCTURAS REPETITIVAS (CICLOS/BUCLES/LOOPS)

// ----- WHILE

/* $contador = 20;

while($contador >= 1) {
    echo $contador, "<br>";
    $contador--;
}

$contador_2 = 1;

while($contador_2 <= 20) {
    echo $contador_2, "<br>";
    $contador_2++;
} */

/* $contador = 1;
$numero = 9;

while($contador <= 10) {
    echo $numero." x ".$contador." = ". $numero * $contador, "<br>";
    $contador++;
} */

// ----- DO-WHILE

$contador = 20;

do {
    echo $contador, "<br>";
    $contador--;
}
while($contador >= 1);


$contador_2 = 1;

do {
    echo $contador_2, "<br>";
    $contador_2++;
}
while($contador_2 <= 20);
