<?php

class Articulo
{
    private $nombre;
    private $coste;
    private $precio;
    private $contador;

    public function __construct($nombre, $coste, $precio, $contador)
    {
        $this->nombre = $nombre;
        $this->coste = $coste;
        $this->precio = $precio;
        $this->contador = $contador;
    }

    public function getnombre()
    {
        return $this->nombre;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getcoste()
    {
        return $this->coste;
    }

    public function setcoste($coste)
    {
        $this->coste = $coste;
    }

    public function getprecio()
    {
        return $this->precio;
    }

    public function setprecio($precio)
    {
        $this->precio = $precio;
    }
    public function getcontador()
    {
        return $this->contador;
    }

    public function setcontador($contador)
    {
        $this->contador = $contador;
    }
    public function __toString()
    {
        /*aqui fabrico un ternario para que escriba si esta disponible o no, dependiendo del estado del Bolean*/
        return "<b>Nombre:</b> {$this->nombre}<br><b>Coste:</b> {$this->coste}<br><b>Precio:</b> {$this->precio}<br><b>Contador:</b> {$this->contador}";}  
}