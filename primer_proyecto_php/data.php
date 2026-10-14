<?php
function pintarTarjeta($item) {
?>
    <div class="tarjeta">
        <img src="<?= $item["imagen"] ?>" alt="<?= $item["titulo"] ?>">
        <div class="info">
            <h3><?= $item["titulo"] ?></h3>
            <h3><?= $item["genero"] ?></h3>
            <h3><?= $item["anyo"] ?></h3>
        </div>
    </div>
<?php
}

$peliculas = [
    ["id" => "1", "titulo" => "X-Men: Primera Generación", "genero" => "Accion", "anyo" => "2011", "imagen" => "./img/xmen.jpg", "destacado" => true],
    ["id" => "2", "titulo" => "Shrek 2", "genero" => "Comedia", "anyo" => "2004", "imagen" => "./img/shrek2.jpg", "destacado" => true],
    ["id" => "3", "titulo" => "It", "genero" => "Terror", "anyo" => "1990", "imagen" => "./img/it.jpg", "destacado" => false],
    ["id" => "4", "titulo" => "Scooby-Doo", "genero" => "Comedia", "anyo" => "2002", "imagen" => "./img/scoobydoo.jpg", "destacado" => false],
    ["id" => "5", "titulo" => "Los Miserables", "genero" => "Drama", "anyo" => "2012", "imagen" => "./img/losmiserables.jpg", "destacado" => true],
    ["id" => "6", "titulo" => "Elemental", "genero" => "Romance", "anyo" => "2023", "imagen" => "./img/elemental.jpg", "destacado" => false]

];

$usuarios = [
    ["id" => "u1", "username" => "Ana", "password" => "passwd1", "rol" => "ADMIN"],
    ["id" => "u2", "username" => "Juan", "password" => "passwd2", "rol" => "USER"],
    ["id" => "u3", "username" => "Pedro", "password" => "passwd3", "rol" => "USER"]
];

?>