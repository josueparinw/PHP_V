<?php
include_once "./dashboard.php";

if (isset($_SESSION["user_logged"])){
    if ($_SESSION["user_rol"] != "ADMIN"){

        header("Location: ./dashboard.php");
        exit();
    }
} else {
    header("Location: ./login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
### add_item.php - Solo ADMIN

Comprueba al inicio si hay sesión activa y si el rol es ADMIN
Si no hay sesión redirige a login.php
Si hay sesión pero no es ADMIN redirige a dashboard.php
Contiene un formulario con todos los campos del item
Al enviar el formulario (por POST al mismo archivo), muestra los datos recibidos en pantalla con el mismo estilo de tarjeta del catálogo.
-->
<form action="" class="form-add" method="post">

        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo"><br>
        
        <label for="genero">Género: </label>
        <select name="genero" id="genero">
            <option value="accion">Acción</option>
            <option value="comedia">Comedia</option>
            <option value="drama">Drama</option>
            <option value="romance">Romance</option>
            <option value="terror">Terror</option>
        </select><br>

        <label for="anyo">Año: </label>
        <input type="number" name="anyo" id="anyo" min="1888" max="2026"><br>

        <label for="image">Imagen: </label>
        <input type="file" name="image" id="image"><br>
        
        <label for="destacado">Destacado: </label>
        <input type="checkbox" name="destacado" id="destacado"><br>

        <button class="form-b">Enviar</button>

    </form>

</body>
</html>