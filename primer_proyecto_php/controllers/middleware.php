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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>hola</h1>
</body>
</html>