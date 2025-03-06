<?php

# DECLARAR VARIABLES

$nombre = "Fernando";

$nombre = "Rocio";

echo $nombre;

# DECLARAR CONSTANTES

const apellido = "Dominguez";

define("deportes", array("tenis", "futbol", "baloncesto"));

echo deportes[2];

# DECLARACIÓN DE ARRAY

$estudiantes = array("Fernando", "Rocio", "Diana");

echo $estudiantes[2]="Jesica"; // asi se remplaza un dato del array por otro luego del =

# ARRAY DE TIPO ESCALAR

$estudiantes =["lola", "lolo", "loli"];

#ARRAY DE TIPO ASOCIATIVO

$tutor = [
    "nombre" => "Fernando",
    "apellido" => "Dominguez",
    "edad" => 30
];

echo $tutor["edad"];

#ARRAY DE MULTIPLES DIMENSIONES

$tutor_2 = [
    "nombre" => "Jazmin",
    "apellido" => "Rojas",
    "edad" => 30,
    "cursos" => ["PHP", "HTML", "CSS"]
];

$tutor_2["pais"] = "Colombia";

echo $tutor_2["pais"];

echo count($estudiantes);

echo count($tutor_2, COUNT_RECURSIVE); // cuenta de manera recursiva

# CONCATENACIÓN DE VARIABLES

$animal = "perro";
$objeto = "llaves";

echo $animal.$objeto;

$resultados = $objeto.$animal; // concatenación de variables en una nueva variable

echo $resultados;

echo "Mi mascota es un: " .$animal;

# INTERPOLACIÓN DE VARIABLES

echo "Mi mascota es un: $animal y tengo $objeto"; // la interpolación no se púede hacer con comillas simples

# OPERADORES ARITMÉTICOS

$NUMERO_1 = 10;
$NUMERO_2 = 5;

echo $NUMERO_1+$NUMERO_2;
echo $NUMERO_1-$NUMERO_2;
echo $NUMERO_1*$NUMERO_2;
echo $NUMERO_1/$NUMERO_2;

$result = $NUMERO_1*$NUMERO_2-10;

echo $result;

# OPERADORES DE ASIGNACIÓN

$num = 5; // = de asignación

$num += 5; // += de incremento

$num -= 5; // -= de decremento

$num *= 5; // *= de multiplicación

$num /= 5; // /= de división

$text = "holas ";
$text .= "y chau"; // .= de concatenación

# ASIGNACIÓN POR REFERENCIA

$text = "hola";

$text_2 = $text;

$text_3 = &$text; // & de referencia

echo $text_3;

# OPERADORES DE COMPARACIÓN

var_dump(1 == 1); // == de igualdad

var_dump(1 === 1); // === de identidad

var_dump(1 != 1); // != de desigualdad

var_dump(1 !== 1); // !== de no identidad

var_dump(1 > 1); // > de mayor que

var_dump(1 < 1); // < de menor que

var_dump(1 >= 1); // >= de mayor o igual que

var_dump(1 <= 1); // <= de menor o igual que

var_dump(1 <> 1); // <> de diferencia

# OPERADORES LÓGICOS

var_dump(1 && 1); // && de y

var_dump(1 || 1); // || de o

var_dump(!1); // ! de negación (que no)

# OPERADORES DE INCREMENTO Y DECREMENTO

++$num; // ++ de pre-incremento
$num++; // ++ de post-incremento

--$num; // -- de pre-decremento
$num--; // -- de post-decremento



