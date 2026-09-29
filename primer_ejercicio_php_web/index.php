<?php
include_once 'arrays_a_usar.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <section class="peliculas">


        <?php 
        foreach($peliculas as $pelicula){
        ?>
        <div class="item">
            <image src="img/ironman-.jpg">
                <h2> <?= $pelicula["titulo"] ?> </h2>
                <h3> <?= $pelicula["universo"] ?> </h3>
                <p> <?= $pelicula["anyo"] ."            ". $pelicula["duracion"] ?> </p>
                <p> <?= $pelicula["puntuacion"] ?> </p>

                <?php
                if (!$pelicula["disponible"]){
                ?>
                    <p>**No disponible**</p>
                <?php 
                };
                ?>
            </div>
        <?php
        };
        ?>

    </section>


</body>
</html>