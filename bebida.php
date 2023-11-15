<?php
class Bebida extends Articulo
{
    private $alcoholica;

    public function __construct($nombre, $coste, $precio, $contador, $alcoholica)
    {
        parent::__construct($nombre, $coste, $precio, $contador);
        $this->alcoholica = $alcoholica;
    }
    public function getalcoholica()
    {
        return $this->alcoholica;
    }

    public function setalcoholica($alcoholica)
    {
        $this->alcoholica = $alcoholica;
    }
    
    public function __toString()
    {
        /*aqui fabrico un ternario para que escriba si tiene alcohol o no, dependiendo del estado del Boolean*/
        $esalcoholica = $this->alcoholica ? '<b><span class="green-text">"No tiene alcohol"</span></b>' : '<b><span class="red-text">"Tiene alcohol"</span></b>';
        // return "<b>Nombre:</b> {$this->nombre}<br><b>coste:</b> {$this->coste}<br><b>Precio:</b> {$this->precio}<br><b>Contador:</b> {$this->contador}<br><b>¿Tiene alcohol?:</b> $esalcoholica";
        return parent::__toString() . "<br> <b>¿Tiene alcohol?:</b> $esalcoholica";
    }

}