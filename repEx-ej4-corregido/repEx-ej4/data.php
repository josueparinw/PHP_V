<?php

define("APP_NAME", "restFood");

function printTarjeta($item){
    ?>
    <div class="tarjeta <?php if(!$item['disponible']){ echo 'no-disp'; }?>">

        <img src=<?= $item["imagen"] ?> alt= <?= $item["nombre"] ?>>

        <div class="info">
            <h3><?=$item["nombre"]?></h3>
            <p><?=$item["descripcion"]?></p>
            <h4><?=$item["precio"]?>€</h4>
            <p class="al"><?php
            foreach($item["alergenos"] as $a):
            echo $a." ";
            endforeach;
            ?></p>
            <?php
            if(!$item["disponible"]):
                echo "<p class='no-disp2'>No disponible</p>";
            endif;
            ?>
        </div>
    </div>


    <?php
}

$platos = [
    [
        "id" => 1,
        "nombre" => "Ceviche",
        "descripcion" => "Pescado fresco marinado en zumo de limón, acompañado de cebolla roja, cilantro, ají y camote.",
        "precio" => 14.50,
        "categoria" => "entrante",
        "alergenos" => ["Pescado"],
        "disponible" => true,
        "imagen" => "img/ceviche.jpg"
    ],
    [
        "id" => 2,
        "nombre" => "Papa a la huancaína",
        "descripcion" => "Rodajas de patata cocida cubiertas con una cremosa salsa de ají amarillo, queso fresco y leche.",
        "precio" => 9.00,
        "categoria" => "entrante",
        "alergenos" => ["Lácteos", "Huevo"],
        "disponible" => true,
        "imagen" => "img/papa-huancaina.jpg"
    ],
    [
        "id" => 3,
        "nombre" => "Causa limeña",
        "descripcion" => "Pastel frío de patata amarilla sazonada con limón y ají, relleno de pollo, mayonesa y aguacate.",
        "precio" => 10.50,
        "categoria" => "entrante",
        "alergenos" => ["Huevo"],
        "disponible" => true,
        "imagen" => "img/causa-limena.jpg"
    ],
    [
        "id" => 4,
        "nombre" => "Lomo saltado",
        "descripcion" => "Jugosos trozos de ternera salteados con cebolla, tomate, salsa de soja y especias, acompañados de arroz y patatas fritas.",
        "precio" => 16.90,
        "categoria" => "principal",
        "alergenos" => ["Soja", "Gluten"],
        "disponible" => true,
        "imagen" => "img/lomo-saltado.jpg"
    ],
    [
        "id" => 5,
        "nombre" => "Ají de gallina",
        "descripcion" => "Pollo desmenuzado en una cremosa salsa de ají amarillo, nueces, leche y queso, servido con arroz y patata.",
        "precio" => 15.50,
        "categoria" => "principal",
        "alergenos" => ["Lácteos", "Frutos secos", "Gluten"],
        "disponible" => true,
        "imagen" => "img/aji-gallina.jpg"
    ],
    [
        "id" => 6,
        "nombre" => "Arroz chaufa",
        "descripcion" => "Arroz frito al estilo chifa con pollo, huevo, cebolla china, salsa de soja y especias.",
        "precio" => 13.50,
        "categoria" => "principal",
        "alergenos" => ["Soja", "Huevo", "Gluten"],
        "disponible" => true,
        "imagen" => "img/arroz-chaufa.jpg"
    ],
    [
        "id" => 7,
        "nombre" => "Anticuchos de corazón",
        "descripcion" => "Brochetas de corazón de ternera marinadas en ají panca y especias, asadas a la parrilla y acompañadas de patata.",
        "precio" => 14.00,
        "categoria" => "principal",
        "alergenos" => [],
        "disponible" => false,
        "imagen" => "img/anticuchos.jpg"
    ],
    [
        "id" => 8,
        "nombre" => "Suspiro a la limeña",
        "descripcion" => "Tradicional postre peruano elaborado con una base de manjar blanco y una suave cobertura de merengue al oporto.",
        "precio" => 6.50,
        "categoria" => "postre",
        "alergenos" => ["Lácteos", "Huevo"],
        "disponible" => true,
        "imagen" => "img/suspiro-limeno.jpg"
    ],
    [
        "id" => 9,
        "nombre" => "Mazamorra morada",
        "descripcion" => "Dulce tradicional preparado con maíz morado, frutas, canela, clavo de olor y un toque de limón.",
        "precio" => 5.50,
        "categoria" => "postre",
        "alergenos" => [],
        "disponible" => true,
        "imagen" => "img/mazamorra-morada.jpg"
    ],
    [
        "id" => 10,
        "nombre" => "Picarones",
        "descripcion" => "Rosquillas fritas elaboradas con calabaza y boniato, servidas con una deliciosa miel de chancaca.",
        "precio" => 6.00,
        "categoria" => "postre",
        "alergenos" => ["Gluten"],
        "disponible" => false,
        "imagen" => "img/picarones.jpg"
    ]
];

?>