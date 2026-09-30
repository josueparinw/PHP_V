<?php
include_once 'arrays_a_usar.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
    
    function imprimirDatos($pelicula): void{
        echo "<image src=" . $pelicula["imagen"] . ">";
        echo "<h2>" . $pelicula["titulo"] . "</h2>";
        echo "<h3>" . $pelicula["universo"] . "</h3>";
        echo "<p>" . $pelicula["anyo"] ."            ". $pelicula["duracion"] . "</p>";
        echo "<p> ★ " . $pelicula["puntuacion"] . "</p>";
        
        if (!$pelicula["disponible"]):
            echo "<p>**No disponible**</p>";
        endif;
    }

    ?>

    <section class="peliculas">


        <?php 
        foreach($peliculas as $pelicula):
        ?>
        <div class="item">
            <?php
            imprimirDatos($pelicula)
            ?>
        </div>
        <?php
        endforeach;
        ?>

    </section>

    <section class="universo">

        <?php
        $filtrouniverso = "Marvel";
        foreach($peliculas as $pelicula):
            if ($pelicula["universo"]===$filtrouniverso):
            ?>

            <div class="item">
                <?php imprimirDatos($pelicula) ?>
            </div>

            <?php
            endif;
        endforeach;
        ?>

    </section>

    <section class="best-ranked">

        <?php
        foreach($peliculas as $pelicula):
            if ($pelicula["puntuacion"] >= 8):
        ?>

        <div class="item">
            <?php imprimirDatos($pelicula) ?>
        </div>

        <?php
            endif;
        endforeach;
        ?>

    </section>


    <section class="watch">

        <?php
        foreach($watchlist as $w):
            $id = $w["pelicula_id"];
            foreach($peliculas as $pelicula):
                if($pelicula["id"]===$id):
        ?>

        <div class="item">
            <image src= <?= $pelicula["imagen"] ?> >
            <h2> <?= $pelicula["titulo"] ?> </h2>
            <p> <?= $pelicula["anyo"] ?> </p>

            <?php if($w["vista"]): ?>
                <p>NO VISTA</p>
            <?php else: ?>
                <p>VISTA</p>
            <?php endif;?>

        </div>

        <?php
                endif;
            endforeach;
        endforeach;
        ?>

    </section>

    <section class="anyadir-peli">
        <form action="">

        <label for="titulo">Título: </label>
        <input type="text"><br><br>
        
        <label for="universo">Universo: </label>
        <input type="text"><br><br>
        
        <label for="director">Director: </label>
        <input type="text"><br><br>

        <label for="anyo">Año: </label>
        <input type="number"><br><br>
        
        <label for="duracion">Duración: </label>
        <input type="number"><br><br>
        
        <label for="puntuacion">Puntuación: </label>
        <input type="number"><br><br>

        <label for="imagen">Imagen: </label>
        <input type="file"><br><br>

        <label for="disponible">Disponible: </label>
        <input type="checkbox"><br><br>

        <button type="submit">Enviar</button>

        </form>
        
    </section>

</body>
</html>