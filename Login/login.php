<?php

if($_POST['usuario']=="Carlos" && $_POST['clave']=="1234") {
    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"]="Carlos";
    $_SESSION["Apellido"]="Alfaro";
    $_SESSION["Pais"]="El Salvador";

    if(headers_sent()){
        echo "<script>window.location.href='contador.php';</script>";
    }else {
        header("Location: contador.php");
    }
}else{
    echo "Datos incorrectos";
}