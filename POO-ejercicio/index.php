<?php require_once "./clases/Videojuego.php";

$games = [
    new Videojuego(1, "Minecraft", "Aventura", 29.99, 10, "./img/minecraft.jpg", 24),
    new Videojuego(2, "The Legend of Zelda: Ocarina of Time", "Aventura", 59.99, 9, "./img/zelda.jpg", 0),
    new Videojuego(3, "Call Of Duty", "Shooter", 79.99, 6, "./img/cod.jpg", 67),
    new Videojuego(4, "Cuphead", "Arcade", 19.99, 8, "./img/cuphead.jpg", 99)
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-ejercicio</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <?php include_once "./partials/header.php" ?>
    <?php include_once "./partials/nav.php" ?>


    <h2>Todos los juegos</h2>
    <section class="all-games">
    <?php
        foreach ($games as $game):
            $game->pintartarjeta();
        endforeach;
        ?>
    </section>
    
    <h2>Juegos recomendados</h2>
    <section class="recomendados">
    <?php
        foreach ($games as $game):
            if ($game->filter("recomendado")):
                $game->pintarTarjeta();
            endif;
        endforeach;
    ?>
    </section>
    
    <h2>Juegos en oferta</h2>
    <section class="ofertas">
    <?php
        foreach ($games as $game):
            if ($game->filter("oferta")):

                $precioConDscto = number_format($game->aplicarDescuento(20), 2, '.', '');

                $game->setPrecio($precioConDscto);

                $game->pintarTarjeta();
            
            endif;
        endforeach;
    ?>
    </section>

    <?php include_once "./partials/footer.php" ?>

</body>
</html>