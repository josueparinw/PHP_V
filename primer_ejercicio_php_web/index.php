<?php
include_once 'arrays_a_usar.php';
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" type="text/css" href="style-p.css">
</head>
<body>

    <?php
    
    function imprimirDatos($pelicula): void{
        echo "<image src=" . $pelicula["imagen"] . ">";
        echo "<div class='datos'>";
        echo "<h2>" . $pelicula["titulo"] . "</h2>";
        echo "<h3>" . $pelicula["universo"] . "</h3>";
        echo "<p>" . $pelicula["anyo"] ."            ". $pelicula["duracion"] . "</p>";
        echo "<p> ★ " . $pelicula["puntuacion"] . "</p>";
        
        if (!$pelicula["disponible"]):
            echo "<p class='no-disp'>**No disponible**</p>";
        endif;
        echo "</div>";
    }

    ?>

    <section class="peliculas">


        <?php 
        foreach($peliculas as $pelicula):
        ?>
        <div class="item <?php if(!$pelicula['disponible']){ echo 'no-disp2'; } ?>">
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
            <div class="datos">
            <h2> <?= $pelicula["titulo"] ?> </h2>
            <p> <?= $pelicula["anyo"] ?> </p>

            <?php if($w["vista"]): ?>
                <p>NO VISTA</p>
            <?php else: ?>
                <p>VISTA</p>
            <?php endif;?>
            </div>
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


    /*
    basándome en la imagen del kit UI Moviora, los colores principales de su paleta oscura en formato hexadecimal son los siguientes:
🖤 Tonos de Fondo (Modo Oscuro)
• #0D0D13 (Negro profundo con matiz azulado / Fondo principal de las pantallas)
• #161622 (Gris oscuro azulado / Fondo de tarjetas, contenedores de texto y barras de navegación)
💜 Colores de Acento y UI (Destacados y Selección)
• #6366F1 (Púrpura/Índigo vibrante / Botón principal "Buy Ticket" y asientos seleccionados)
• #312E81 (Púrpura oscuro opaco / Estado de asientos ya reservados)
• #1E1B4B (Púrpura muy oscuro / Fondos secundarios de interacción)
🤍 Tipografía y Elementos de Lectura
• #FFFFFF (Blanco puro / Títulos principales y texto destacado)
• #9CA3AF (Gris claro / Textos secundarios, fechas y etiquetas secundarias)
⭐️ Detalles Adicionales
• #F59E0B (Amarillo ámbar / Puntuación de las películas y estrellas de valoración)
Si lo deseas, dime:
• ¿Quieres que te ayude a crear una combinación de colores alternativa basada en esta estética?
• ¿Necesitas los códigos en otro formato (como RGB o HSL)?
• ¿Te gustaría generar el código CSS listo para usar en tu proyecto?
    */

</body>
</html>