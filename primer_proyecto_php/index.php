<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST"):
        header("Location: ./login.php");
        exit();
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Primer Proyecto</title>
</head>
<body>
    
    <?php include_once "./config.php"; ?>
    <?php include_once "./data.php"; ?>
    <?php include_once "./controllers/middleware.php"; ?>
    
    <?php include_once "./partials/header.php"; ?>
    <?php include_once "./partials/nav.php"; ?>

    <h1>Primer Proyecto</h1>
    <p>Descripcion</p>


    <hr>
    <h2>Películas destacadas</h2>
    <section class="pelis-destacadas">
        <?php
        foreach ($peliculas as $pelicula):
            if ($pelicula["destacado"]):
        ?>

            <div class="item">
                <?php pintarTarjeta($pelicula); ?>
            </div>

        <?php
            endif;
        endforeach;
        ?>
    </section>

    <form action="./login.php" method="post">
        <button class="login-b"> LOGIN </button>
    </form>
    

    <?php include_once "./catalogo.php"; ?>

    <?php include_once "./partials/footer.php"; ?>
</body>
</html>