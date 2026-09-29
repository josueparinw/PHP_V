<?php

$juegos = array(
["id"=> 1 , "nombre"=> "Minecraft" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "Aventura"],
["id"=> 2 , "nombre"=> "GTA VI" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "Rol"],
["id"=> 3 , "nombre"=> "FNAF" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "Terror"],
["id"=> 4 , "nombre"=> "Tetris" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "Arcade"],
["id"=> 5 , "nombre"=> "Roblox" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "Sandbox"]
);


$carrito = array(
    ["juego_id" => 1, "qty" => 1],
    
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera web PHP</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <main>
        <section class="juegos">

            <?php
            foreach($juegos as $juego){
            ?>

                <div class="item">
                    <h2 class="title"> <?= $juego["nombre"] ?> </h2>
                    <p class="description"> <?= $juego["descripcion"] ?> </p>
                    <span class="category"><?= $juego["categoria"] ?></span>
                </div>

            <?php
            }
            ?>


        </section>

        <section class="cart">

        <table>
            <tbody>

                <?php
                foreach($carrito )
                ?>

                <tr>  </tr>

                
                <?php
                ?>

            </tbody>
        </table>


        </section>

    </main>
    
</body>
</html>