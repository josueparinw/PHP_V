<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepEx Ej5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include_once "./partials/header.php";?>

    <section class="formulario">

        <?php // si es GET es por una redireccion, y si tiene error es que hay un dato erróneo
        if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["error"])){
            if($_GET["error"] === "campos"){
                echo "<p class='error'>Hay campos obligatorios sin rellenar</p>";
            }
            elseif ($_GET["error"] === "personas") {
                echo "<p class='error'>El número de personas debe ser entre 1 y 10</p>";
            }
            elseif ($_GET["error"] === "preferencia") {
                echo "<p class='error'>La preferencia seleccionada no es válida</p>";
            }
            else {
                echo "<p class='error'>Acceso denegado</p>";
            }
        }
        ?>

        <form action="./controllers/reserva.php" method="post">

            <label for="nombre">Nombre: </label>    
            <input type="text" name="nombre" ><br>

            <label for="email">Email: </label>
            <input type="email" name="email" ><br>

            <label for="fecha">Fecha: </label>
            <input type="date" name="fecha" ><br>

            <label for="personas">Numero de personas: </label>
            <input type="number" name="personas"><br>

            <label for="preferencia">Preferencia: </label>
            <select name="preferencia" id="preferencia" >
            <option value="interior">Interior</option>
            <option value="terraza">Terraza</option>
            </select><br>

            <button type="submit">Enviar</button>

        </form>

    </section>

    <?php include_once "./partials/footer.php";?>
</body>
</html>