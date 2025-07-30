<?php
    session_name("LOGIN");
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sesiones en PHP</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <label>Usuario</label>
            <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
            <br>
            <label>Clave</label>
            <input type="password" name="clave" pattern="[a-zA-Z0-9$#.-_]{4,30}" maxlength="30">
            <br><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>