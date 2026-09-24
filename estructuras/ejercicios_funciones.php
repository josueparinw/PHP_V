<?php

/*
 *
 * Ejercicio 1
 *
 * ------------------------------
Crear un array CLAVE-VALOR que se llame productos. Este elemento tendrá dentro arrays. Cada array interno tendrá una estructura id, name, price, stock, category. Mínimo 5 items.

Luego, crea otro array llamado carrito. Este array tendrá otros arrays internos. Cada array interno tendrá lo siguiente:

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

- listar el contenido de productos.

- listar productos sin stock.

- listar solo los productos (info de productos) que estén añadidos en el carrito (cart).

- Listar el nombre y el precio total a pagar de los productos que estén en el carrito.
*/


$productos = Array(
    //id, name, price, stock, category
    ["id" => 1, "name" => "jabón", "price" => 3.10, "stock" => 150, "category" => "aseo"],
    ["id" => 2, "name" => "camiseta", "price" => 6.70, "stock" => 200, "category" => "ropa"],
    ["id" => 3, "name" => "pórtatil", "price" => 699.99, "stock" => 100, "category" => "electrónica"],
    ["id" => 4, "name" => "arroz", "price" => 2.50, "stock" => 240, "category" => "comida"],
    ["id" => 5, "name" => "tv", "price" => 399.99, "stock" => 0, "category" => "electrónica"]
);

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

echo "<h1>EJ 1</h1>";

echo "<h3> LISTA DE PRODUCTOS</h3>";
$indice = 1;
foreach($productos as $producto){
    echo "--- Producto " . $indice . " ---<br>";
    foreach ($producto as $key => $value) {
        if ($key == "price")
            echo $key . ": " . $value . "€<br>";
        else echo $key . ": " . $value . "<br>";
    };
    echo "<br>";
    $indice++;
};


echo "<br><h3>¡PRODUCTOS SIN STOCK!</h3>";
foreach($productos as $producto){
    if ($producto["stock"]==0) {
        
        foreach($producto as $key => $value){
            if ($key == "price")
                echo $key . ": " . $value . "€<br>";
            else echo $key . ": " . $value . "<br>";
        } 
    }
}
            
            
echo "<br><h3>PRODUCTOS EN EL CARRITO</h3>";
foreach($cart as $articulo){
    foreach($productos as $producto){
        if ($producto["id"]==$articulo["product_id"]){
            foreach($producto as $key => $value){
                if ($key == "price")
                    echo $key . ": " . $value . "€<br>";
                else echo $key . ": " . $value . "<br>";
            }
        }
    }
    echo "<br>";
}


echo "<h3>COMPRA TOTAL CARRITO</h3>";
$total = 0;
foreach($cart as $articulo){
    $total_articulo = 0;
    foreach($productos as $producto){
        if($producto["id"]==$articulo["product_id"]){
            $total_articulo += $producto["price"]*$articulo["qty"];
            echo $producto["name"] . ": " . $total_articulo . "€<br>";
            $total += $total_articulo;
        }

    }
}
echo "<b>Total: " . $total . "€</b>";






/*
 *
 * Ejercicio 2
 *
 * ------------------------------
Tenemos un array llamado $users o $usuarios. este array es bidimensional. La estructura de los arrays internos tiene username, password, role (ADMIN o USER), isActive (true o false).

cuando Pongáis el isActive ponedlo como json_encode(true o false).

Cread una variable array, que tendrá username y un password.

    - Comprobar si el usuario existe en nuestra bbdd ($users). Si no existe al final de toda la comprobación habrá que poner un mensaje que diga "Usuario no existe".
    - Si existe, y la contraseña es incorrecta, poned "Contraseña incorrecta".
    - Si todo coincide, poned "Bienvenido [USERNAME]. Rol [ROL]".
    - Luego crear un array unidimensional, cuya posición 0 sea "Acceso total", la posición 1 será "Acceso limitado".

 *
 * */
echo "<h1>EJ 2</h1>";

$users = Array(
    ["username" => "user01", "password" => "contrasena1", "role" => "ADMIN", "isActive" => json_encode(true)],
    ["username" => "user02", "password" => "contrasena2", "role" => "USER", "isActive" => json_encode(true)],
    ["username" => "user03", "password" => "contrasena3", "role" => "USER", "isActive" => json_encode(false)],
    ["username" => "user04", "password" => "contrasena4", "role" => "USER", "isActive" => json_encode(true)]
);

$usuario = (
    ["username" => "user04", "password" => "contrasena4"]
);

$encontrado = false;
foreach($users as $user){
    foreach($user as $key => $value){
        if ($key == "username"){
            if ($user[$key] === $usuario[$key]){
                $encontrado = true;
                if ($user["password"] === $usuario["password"]){
                    echo "Bienvenido " . $user["username"] . " - Rol " . $user["role"];
                }
                else
                    echo "Contraseña incorrecta";
            }
        }
    }
}
if (!$encontrado) echo "Usuario no existe";
