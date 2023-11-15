<?php
// solicitar los archivos "articulo.php", "bebida.php", "pizza.php";
include('articulo.php'); //También vale poner "Require"
include('pizza.php');
include('bebida.php');

// Inicialización de los artículos

$articulo1 = new Articulo("Lasagna", 3.50, 7.00, 20);
$articulo2 = new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15);
$pizza1 = new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]);
$pizza2 = new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]);
$pizza3 = new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]);
$pizza4 = new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]);
$bebida1 = new Bebida("Refresco", 1.00, 2.00, 50, false);
$bebida2 = new Bebida("Cerveza", 1.50, 3.00, 40, true);

$articulos = [$articulo1, $articulo2, $pizza1, $pizza2, $pizza3, $pizza4, $bebida1, $bebida2];

mostrarMenu($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);
 
function mostrarMenu($articulos)
{
echo "<h1>Nuestro menú</h1>";
 
echo "<h2>Pizzas</h2>";
foreach ($articulos as $articulo) {
if (get_class($articulo) == "Pizza") {
echo $articulo->getNombre() . "<br>";
}
}
 
echo "<h2>Bebidas</h2>";
foreach ($articulos as $articulo) {
if (get_class($articulo) == "Bebida") {
echo $articulo->getNombre() . "<br>";
}
}
 
echo "<h2>Otros</h2>";
foreach ($articulos as $articulo) {
if (get_class($articulo) != "Pizza" && get_class($articulo) != "Bebida") {
echo $articulo->getNombre() . "<br>";
}
}
}
 
function mostrarMasVendidos($articulos){
echo "<h1>Los más vendidos</h1>";
 
usort($articulos, function ($a, $b) {
$totalVendidosA = $a->getContador();
$totalVendidosB = $b->getContador();
 
if ($totalVendidosA == $totalVendidosB) {
return 0;
} else {
return ($totalVendidosA > $totalVendidosB) ? -1 : 1;
}
});
 
foreach (array_slice($articulos, 0, 3) as $articulo) {
echo $articulo->getNombre() . " - Vendidos: " . $articulo->getContador() . "<br>";
}
}
 
function mostrarMasLucrativos($articulos){
usort($articulos, function ($a, $b) {
$beneficioB = ($b->getPrecio() * $b->getContador()) - ($b->getCoste() * $b->getContador());
$beneficioA = ($a->getPrecio() * $a->getContador()) - ($a->getCoste() * $a->getContador());
return $beneficioB - $beneficioA;
});
 
echo "<h2>¡Los más lucrativos!</h2>";
foreach ($articulos as $item) {
$beneficio = ($item->getPrecio() * $item->getContador()) - ($item->getCoste() * $item->getContador());
echo $item->getNombre() . " Beneficio: " . $beneficio . "€<br>";
}
}

// include('vista.php'); 

