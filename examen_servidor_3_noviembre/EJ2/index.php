<?php

require "datos.php";
require "funciones.php";

// Escribe aquí la lógica y las llamadas a tus funciones (antes del HTML)
$pMasCaro = productoMasCaro($productos);
$categorias = agruparPorCategoria($productos);
$pSinStock = productosSinStock($productos);
$pOrdenados = ordenarPorPrecio($productos);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    
</head>
<body>
    <h3>1. Todos los productos</h3>
    <!-- Escribe aquí el HTML de la página -->
    <table border=1>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($productos as $p){ ?>
            <tr>
                <td><?= $p["nombre"] ?></td>
                <td><?= $p["categoria"] ?></td>
                <td><?= $p["precio"] ?></td>
                <td><?= $p["stock"] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    
    <hr>
    <h3>2. Valor total del inventario</h3>
    <p><b> <?=valorInventario($productos)?>€</b></p>

    <hr>
    <h3>3. Producto más caro</h3>
    <p><b> <?= $pMasCaro["nombre"]?> </b> · <?= $pMasCaro["precio"]?> €</p>

    <hr>
    <h3>4. Productos por categoría</h3>
    <table border=1>
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Productos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categorias as $categoria){ ?>
            <tr>
                <td><?= print_r($categoria) ?></td>
                <td><?= print_r($categoria) ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <hr>
    <h3>5. Productos sin stock</h3>
    <ul>
        <?php foreach($pSinStock as $p): ?>
        <li> <?= $p["nombre"] ?> </li>
        <?php endforeach; ?>
    </ul>


    <hr>
    <h3>6. Ordenados por precio</h3>
    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pOrdenados as $p){ ?>
            <tr>
                <td><?= $p["nombre"] ?></td>
                <td><?= $p["precio"] ?> €</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <hr>
    <h3>7. Comprobacion con inventario vacío</h3>
    <p>Valor del inventario: <b><?= valorInventario([]) ?> €</b> · Producto más caro: <b><?php if(!productoMasCaro([])) echo "Sin productos" ?></b></p>

</body>
</html>
