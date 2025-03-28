<?php

/* function saludo($nombre){
    return "Hola, mi nombre es: $nombre";
}
    echo saludo("Julia");

$usuario = "Maria";
    echo saludo($usuario);

echo saludo($nombre = "Dario"); */

/* function promedio_alumno($nota_1, $nota_2, $nota_3) {
    $promedio = ($nota_1 + $nota_2 + $nota_3) / 3;
    return $promedio;
} */

/* $promedio = promedio_alumno(7, 9, 10);

echo $promedio; */

# ------------------------------ FUNCIONES PRE-DEFINIDAS

/* $cadena_texto = "esto es una prueba";

echo strtolower($cadena_texto); // strtolower hace que todo el texto este en minusculas
echo "<br>";
echo strtoupper($cadena_texto); // strtoupper hace que todo el texto este en mayusculas
echo "<br>";
echo ucfirst($cadena_texto); // ucfirst hace que la primer letra del string sea mayuscula
echo "<br>";
echo ucwords($cadena_texto); // ucwords hace que las primeras letras sean mayusculas
echo "<br>"; */

# ------------------------------- FUNCIONES PARA CONTAR CARACTERES

/* $contar_caracteres = "Esto es una prueba x2";

$longitud = strlen($contar_caracteres); // strlen se usa para contar caracteres de un string
echo $contar_caracteres." Tiene: ".$longitud." caracteres. <br>";

$palabras = str_word_count($contar_caracteres); // str_word_count se usa para contar la cantidad de palabras de un string
echo $contar_caracteres." Tiene: ".$palabras." palabras. <br>"; */

# ------------------------------- CONVERTIR STRING EN ARRAY

/* $fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis";

$array_fecha = explode("/", $fecha_1); // explode(delimitador, string, limitador) hace que se pueda agarrar un dato de un string como si fuera un array
    echo $array_fecha[1];
echo "<br>";

$array_fecha2 = explode("-", $fecha_2);
    echo $array_fecha2[2];
echo "<br>";

$array_numeros = explode(" ", $numeros, 3);
    echo $array_numeros[2]; */

// delimitador = por lo que se separa el string... ejem: / - " "
// string = la cadena que queremos separar
// limitador = en cuantas partes dividis un string

# ---------------------------------- FUNCIONES MATEMATICAS LINK: https://www.php.net/manual/es/book.math.php

echo "El resultado de 4 al cuadrado es: ".pow(4, 2); // elevar un numero
echo "<br>";
echo "La raiz de 25 es: ".sqrt(25); // raiz de un numero
echo "<br>";
echo "Un numero aleatorio entre 1 y 50 es: ".rand(1, 50); // numero aleatorio entre parametros
echo "<br>";
echo "El valor de pi es: ".pi();
echo "<br>";
echo "Redondea 4.3 hacia abajo: ".floor(4.3); // redondea hacia abajo
echo "<br>";
echo "Redondea 4.3 hacia abajo: ".ceil(4.3); // redondea hacia arriba
echo "<br>";
echo "Redondea 5.3 hacia abajo: ".round(5.3); // redondea hacia abajo porque el numero decimal es inferior a 5
echo "<br>";
echo "Redondea 5.7 hacia arriba: ".round(5.7); // redondea hacia arriba porque el numero decimal es superior a 5
echo "<br>";
echo "Redondea 6.874 en un digito con 2 decimales: ".round(6.874, 2); // el numero despues de la , determina cuantos decimales muestra