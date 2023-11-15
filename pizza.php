<?php
class Pizza extends Articulo
{
    private $ingredientes;

    public function __construct($nombre, $coste, $precio, $contador, $ingredientes)
    {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->ingredientes = $ingredientes;
    }
    public function getingredientes()
    {
        return $this->ingredientes;
    }

    public function setingredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }
    
    public function __toString() 
    {
        return parent::__toString() . "<br> <b>ingredientes:</b> {$this->ingredientes}";
    }
}
