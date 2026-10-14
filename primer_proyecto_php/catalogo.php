<?php
include_once "data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Catalogo</title>
</head>
<body>
    <?php include_once "partials/nav.php"; ?>
    
<h2>Todas las películas</h2>
<section class="pelis-total">
    <?php foreach ($peliculas as $pelicula): ?>
        <div class="item">
            <?php pintarTarjeta($pelicula); ?>
        </div>
    <?php
    endforeach;
    ?>
</section>


<hr>
<h2>Películas de Comedia</h2>
<section class="pelis-comedia">
    <?php foreach ($peliculas as $pelicula):
        if ($pelicula["genero"]==="Comedia"):
    ?>

        <div class="item">
            <?php pintarTarjeta($pelicula); ?>
        </div>

    <?php
        endif;
    endforeach;
    ?>
</section>  


</body>
</html>