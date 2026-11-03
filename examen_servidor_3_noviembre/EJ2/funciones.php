<?php

// Escribe aquí las funciones.
function valorInventario($productos) {
    if(count($productos)==0) return 0;
    else {
        $sumaTotal = 0;
        foreach($productos as $p){
            $sumaTotal += ($p["precio"]*$p["stock"]);
        }
        return $sumaTotal;
    }
}

function productoMasCaro($productos) {
    if (count($productos) == 0) return null;
    else {
        $masCaro = $productos[0];
        foreach ($productos as $p) {
            if($masCaro["precio"]<$p["precio"]) $masCaro=$p;
        }
        return $masCaro;
    }
}

function agruparPorCategoria($productos) {
    if(count($productos)==0) return [];

    else {
        $categorias = [];

        $cont = 0;
        foreach($productos as $p){
            if (in_array( $p["categoria"] , $categorias)) $cont++;
            else $categorias[ ] = [$p["categoria"] => $cont];
            
        }
        return $categorias;
    }
}

function productosSinStock($productos) {
    if(count($productos)==0) return [];

    else {
        $sinStock = [];
        foreach($productos as $p){
            if ($p["stock"]==0){
                $sinStock[] = $p;
            }
        }
        return $sinStock;
    }
}

function ordenarPorPrecio($productos) {
    if(count($productos)==0) return [];

    else {
        $prodSorted = $productos;

        usort($prodSorted, fn($a, $b) => $a["precio"] <=> $b["precio"]);

        return $prodSorted;
    }
}

?>