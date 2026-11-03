<?php

class Coche {
    private int $id;
    private string $marca;
    private string $modelo;
    private float $precio;
    private float $kilometros;
    private bool $disponible;

    public function __construct(string $marca, string $modelo, float $precio, float $kilometros, bool $disponible){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->kilometros = $kilometros;
        $this->disponible = $disponible;
    }

    
}


?>