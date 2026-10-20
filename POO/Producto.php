<?php

class Producto {
    
    private string $nombre;
    protected float $precio;
    protected string $categoria;
    protected bool $estaPublicado;
    protected int $puntuacion;

    public function __construct(string $nombre, float $precio, $categoria, $estaPublicado, $puntuacion){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->estaPublicado = $estaPublicado;
        $this->puntuacion = $puntuacion;
    }

    /**
     * Get the value of nombre
     *
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param string $nombre
     *
     * @return self
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     *
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @param float $precio
     *
     * @return self
     */
    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of categoria
     *
     * @return string
     */
    public function getCategoria(): string
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @param string $categoria
     *
     * @return self
     */
    public function setCategoria(string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of estaPublicado
     *
     * @return bool
     */
    public function getEstaPublicado(): bool
    {
        return $this->estaPublicado;
    }

    /**
     * Set the value of estaPublicado
     *
     * @param bool $estaPublicado
     *
     * @return self
     */
    public function setEstaPublicado(bool $estaPublicado): self
    {
        $this->estaPublicado = $estaPublicado;

        return $this;
    }

    /**
     * Get the value of puntuacion
     *
     * @return int
     */
    public function getPuntuacion(): int
    {
        return $this->puntuacion;
    }

    /**
     * Set the value of puntuacion
     *
     * @param int $puntuacion
     *
     * @return self
     */
    public function setPuntuacion(int $puntuacion): self
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }
    


    public function printHTML() {
        ?>
        <div>
            <p><?= $this->getNombre() ?></p>
            <p><?= $this->getPrecio() ?></p>
            <p><?= $this->getCategoria() ?></p>
            <p><?= json_encode($this->getEstaPublicado()) ?></p>
            <p><?= $this->getPuntuacion() ?></p>
        </div>
        <?php
    }

}

?>