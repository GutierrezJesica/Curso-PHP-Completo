<?php
# ------------------------------- ENVIAR FORMULARIOS CON GET Y POST
?>


<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datos-form.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">

        <br>
        <br>

        <label for="materia">Materia</label>
        <select name="materia" id="materia">
            <option value="Desarrollo Web">Desarrollo Web</option>
            <option value="Programación">Programación</option>
            <option value="Base de Datos">Base de Datos</option>
        </select>

        <br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>

<?php
# ------------------------------- FORMULARIOS CON OPCIÓN MULTIPLE
?>

<br>
<br>
<br>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datos-form.php" method="POST">
        
        <label for="materias">Materias</label>
            <select name="materias[]" id="materias" multiple>
                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Programación">Programación</option>
                <option value="Base de Datos">Base de Datos</option>
            </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>