<?php

require "datos.php";

// Escribe aquí la lógica y los cálculos (antes del HTML)


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $buscar = $_GET['buscar'] ?? null;
    $categoria = $_GET['categoria'] ?? null;
    $contador = 0;

    if($buscar && $categoria && $categoria!="todas"){
        foreach($eventos as $evento){
            if(str_contains(mb_strtolower($evento["titulo"]), mb_strtolower($buscar)) &&
            $categoria==mb_strtolower($evento["categoria"])){
                include "./partials/tarjeta.php";
                $contador++;
            }
        }
    }
    elseif (!$buscar && $categoria && $categoria!="todas"){
        foreach($eventos as $evento){
            if($categoria==mb_strtolower($evento["categoria"])){
                include "./partials/tarjeta.php";
                $contador++;

            }
        }
    }
    elseif (!$buscar && $categoria=="todas"){
        foreach($eventos as $evento){
            include "./partials/tarjeta.php";
                $contador++;

        }
    }
    else {
        foreach($eventos as $evento){
            include "./partials/tarjeta.php";
                $contador++;

        }
    }

}
else {
    header("Location: ../index.php?error=403");
    exit();
}

?>
<?php require "partials/header.php"; ?>

<main>

    <!-- Escribe aquí el formulario de búsqueda y el listado de eventos -->

    <form action="" method="get">

    <div>
    <label for="buscar">Buscar por título: </label>
    <input type="text" name="buscar" id="buscar"></div>
    
    <div>
    <label for="categoria">Categoría:</label>
    <select name="categoria" id="categoria">
    <option value="todas">todas</option>
    <option value="musica">musica</option>
    <option value="teatro">teatro</option>
    <option value="cine">cine</option>
    <option value="deporte">deporte</option>
    </select></div>

    <div>
    <button type="submit">Buscar</button></div>
    </form>


    <p>Mostrando <?=$contador?> de <?=count($eventos)?> eventos</p>

</main>

<?php require "partials/footer.php"; ?>
