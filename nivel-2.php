<?php
# FORMATEAR NUMEROS

# number_format($number, $decimals, $dec_point, $thousands_sep)

/* $cantidad_1 = 12458.78;
$cantidad_2 = 9145.67;

$cantidad_1 = number_format($cantidad_1, 2, ",", ".");
$cantidad_2 = number_format($cantidad_2, 2, ",", ".");

echo $cantidad_1;
echo "<br>";
echo $cantidad_2; */

# ------------------------------- FECHAS

# date("formato", timestamp)
# LINK: https://www.php.net/manual/es/function.date-default-timezone-set.php
# LINK: https://www.php.net/manual/es/function.date.php


date_default_timezone_set("America/Argentina/Buenos_Aires"); // cambia la zona horaria

$dia_actual = date("l");
$fecha_actual = date("d-m-Y");

echo $dia_actual." ".$fecha_actual. "<br>";

# ------------------------------- INSCRIPTACIÓN DE CONTRASEÑA

$clave = "HannieSalvaje123";

$clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);

$clave_2 = "ChimueloSalvaje_2324";

if(password_verify($clave_2, $clave_procesada)) {
    echo "Las claves coinciden";
}else{
    echo "Las claves no coinciden";
}

# ------------------------------- ENVIAR FORMULARIOS CON GET Y POST

# ------------------------------- SABER si una VARIABLE esta VACIA o DEFINIDA con isset() | empty()









# -------------------------------- COOKIES / SESIONES
