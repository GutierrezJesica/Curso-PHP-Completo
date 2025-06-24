<?php

#POST --> la informacion se envia al servidor y quedan ocultos

$nombre=$_POST["nombre"];
echo $nombre;
echo "<br>";
$apellido = $_POST["apellido"];
echo $apellido;
echo "<br>";
$materia = $_POST["materia"];
echo $materia;

# GET --> la informacion se envia al servidor y se muestra en la url

$nombre=$_GET["nombre"];
echo $nombre;
echo "<br>";
$apellido = $_GET["apellido"];
echo $apellido;
echo "<br>";
$materia = $_GET["materia"];
echo $materia;

# OPCIONES MULTIPLES

$materias = $_POST["materias"];
echo $materias[0];
echo "<br>";
echo $materias[1];
echo "<br>";
echo $materias[2];
echo "<br>";
echo $materias[3];