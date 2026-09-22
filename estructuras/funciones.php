<?php

function Saludar($nombre): void {
    echo "<h1>$nombre</h1>";
}

function SumaNumeros($n1, $n2): float {
    return $n1 + $n2;
}

Saludar("Camilo");
echo "<br>";
echo SumaNumeros(15, 2.05);

echo "<br>";
echo "<br>";

$componentes = Array(
    ["nombre" => "Monitor", "precio" => 249.95, "categoria" => "curved"],
    ["nombre" => "Torre", "precio" => 799.95, "categoria" => "gaming"]
);


// Producto: Monitor, 249.95 <span>curved</span>
foreach ($componentes as $componente){
    
    echo "<p>Producto: " . $componente["nombre"] . ", " . $componente["precio"] . "<span>" . $componente["categoria"] . "</span></p>";
}

?>