<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de control</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

    <?php
    $stats = [
        ["titulo" => "Total Orders", "subtitulo" => "All Regions", "num" => "8,542", "data" => "+3.5% since last month"],
        ["titulo" => "Total Revenue", "subtitulo" => "This Quarter", "num" => "$23,456", "data" => "+8.5% since last month"],
        ["titulo" => "Total Customers", "subtitulo" => "Worldwide", "num" => "5,678", "data" => "-2.5% since last month"],
        ["titulo" => "Total Products", "subtitulo" => "Inventory", "num" => "1,234", "data" => "+5.0% since last month"],
        ["titulo" => "Active Shoppers", "subtitulo" => "Live Now", "num" => "179", "data" => "44% today"]
    ];

    $products = [
        ["imagen" => "./img/prod1.jpg", "nombre" => "Denim Jacket", "categoria" => "Outerwear", "sku" => "DJ-659", "stock" => "In Stock", "precio" => 120, "state" => "Published"],
        ["imagen" => "./img/prod2.jpg", "nombre" => "Leather Belt", "categoria" => "Accessories", "sku" => "LB-500", "stock" => "In Stock", "precio" => 45, "state" => "Published"],
        ["imagen" => "./img/prod3.jpg", "nombre" => "Slim Fit Jeans", "categoria" => "Bottoms", "sku" => "SFJ-2021", "stock" => "Low Stock", "precio" => 89, "state" => "Draft"],
        ["imagen" => "./img/prod4.jpg", "nombre" => "Formal Blazer", "categoria" => "Suits & Blazers", "sku" => "FB-300", "stock" => "In Stock", "precio" => 199, "state" => "Published"]
    ];
    ?>
    

    <section class="stats">

    <?php
    foreach ($stats as $stat):
    ?>
        <div class="item" >
            <p><?= $stat["titulo"] ?></p>
            <p><small><?= $stat["subtitulo"] ?></small></p>
            <h1><?= $stat["num"] ?></h1>
            <p><?= $stat["data"] ?></p>
        </div>
    <?php
    endforeach;
    ?>
    </section>

    <section class="products-list">
        <h2>Products List</h2>

        <div class="searcher">

            <div class="selects">
                <select name="status" id="status">
                    <option value="">Status</option>
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
                <select name="category" id="category">
                    <option value="">Category</option>
                    <option value="outerwear">Outerwear</option>
                    <option value="accessories">Accessories</option>
                    <option value="bottoms">Bottoms</option>
                    <option value="suitsblazers">Suits & Blazers</option>
                </select>
            </div>

            <button class="add">+ Add Product</button>
        </div>

        <div class="products">

        <?php 
        foreach ($products as $product):
        ?>
            <div class="product">
                <img src= <?= $product["imagen"] ?>>
                <div class="info">
                    <h3><?= $product["nombre"] ?></h3>
                    <p class="category"><?= $product["categoria"] ?></p>
                    <br>
                    <p><b>SKU: </b><?= $product["sku"] ?></p>
                    <p><b>Stock:</b><?= $product["stock"] ?></p>
                    <p><b>Price:</b> $<?= $product["precio"] ?></p>
                    <?php
                    if ($product["state"]=="Published"):
                    ?>
                        <h5 class="published"><?= $product["state"] ?></h5>
                    <?php
                    else:
                    ?>
                        <h5 class="draft"><?= $product["state"] ?></h5>
                    <?php
                    endif;
                    ?>
                </div>
            </div>

        <?php
        endforeach;
        ?>
            
        </div>

    </section>

</body>
</html>