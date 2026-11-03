<?php
include_once "./data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RepEx Ej4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include_once "./partials/header.php"; ?>

    <h2>Entrantes</h2>
    <section class="entrantes">
    <?php
    foreach($platos as $plato):
        if($plato["categoria"]==="entrante"):
            printTarjeta($plato);
        endif;
    endforeach;
    ?>
    </section>

    <h2>Principales</h2>
    <section class="principales">
    <?php
    foreach($platos as $plato):
        if($plato["categoria"]==="principal"):
            printTarjeta($plato);
        endif;
    endforeach;
    ?>
    </section>

    <h2>Postres</h2>
    <section class="postres">
    <?php
    foreach($platos as $plato):
        if($plato["categoria"]==="postre"):
            printTarjeta($plato);
        endif;
    endforeach;
    ?>
    </section>

    <?php include_once "./partials/footer.php"; ?>
</body>
</html>