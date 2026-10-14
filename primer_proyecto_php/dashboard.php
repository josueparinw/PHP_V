<?php
session_start();
include_once "./controllers/logout.php";
include_once "./data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><!--
### dashboard.php - Privado

Comprueba al inicio si hay sesión activa, si no redirige a login.php
Muestra un mensaje de bienvenida con el username y el role del usuario
Muestra el número total de items del catálogo
Si el usuario es ADMIN, muestra además un enlace a add_item.php-->

    <main class="header-dash">
        <h3>
            ¡Bienvenid@, <?= $_SESSION["user_logged"] ?>! Eres <?= $_SESSION["user_rol"] ?> 🐱
        </h3>

        <form action="" method="post">
            <button type="submit" class="form-b">LOGOUT</button>
        </form>
        
    </main>

    <main class="header-dash">
        <p>Total de items en el catálogo: <?=count($peliculas)?> </p>

        <?php
        if ($_SESSION["user_rol"]==="ADMIN"):
            echo "<a href='add_item.php' class='add-b'>Agregar item</a>";
        endif;
        ?>
    </main>
</body>
</html>