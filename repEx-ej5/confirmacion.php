<?php

session_start();


if(!isset($_SESSION["sesionActiva"])){
    header("Location: ./index.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    session_destroy();
    header("Location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        
    <div class="tarjeta">

        <h3>Hola, <?= $_SESSION["nombre"] ?></h3>
        <h4>tu reserva ha sido realizada</h4>

        <p>Email de contacto: <?= $_SESSION["email"] ?></p>
        <p>Fecha reservada: <?= $_SESSION["fecha"] ?></p>
        <p>Número de personas: <?= $_SESSION["personas"] ?></p>
        <p>Preferencia: <?= ucfirst($_SESSION["preferencia"]) ?></p>

    </div>

    <form action="" method="post">
        <button type="submit">Cerrar sesión</button>

    </form>
</body>
</html>

