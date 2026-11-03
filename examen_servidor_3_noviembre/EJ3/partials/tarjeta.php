<?php

// Este archivo se incluye dentro del foreach de index.php.
// Usa la variable $evento, que ya existe en ese momento.
// Escribe aquí la lógica (antes del HTML).
include_once "./datos.php";
?>

<!-- Escribe aquí el HTML de la tarjeta del evento -->
<div class="tarjeta">
    <div class="izq">
    <p class="text-secondary"><?= date("d/m/Y", strtotime($evento["fecha"])) ?></p>
    <h3><?= $evento["titulo"] ?></h3>
    <p class="text-secondary"><?= $evento["lugar"] ?> · <?= $evento["categoria"] ?></p>
    </div>
    <div class="der">
    <?php if($evento["precio"]==0): ?>
    <p class="fw-bold fs-5">Gratis</p>
    <?php else:?>
    <p class="fw-bold fs-5"><?= $evento["precio"] ?>€</p>
    <?php endif; ?>

    <?php if($evento["aforo"]==$evento["vendidas"]): ?>
    <p class="text-danger">Agotado</p>
    <?php elseif( ($evento["aforo"]-$evento["vendidas"]) < ($evento["aforo"]*0.15) ): ?>
    <p class="text-warning">Últimas plazas</p>
    <?php else: ?>
    <p class="text-success">Disponible</p>
    <?php endif;?>
    </div>
</div>