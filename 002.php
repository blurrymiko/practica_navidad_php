<?php
declare(strict_types=1);

// EJERCICIO 2: GSimulador de carrito de compras

// 1. Introducir datos de entrada. ($producto/nombre $precio $cantidad)
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];



// Definimos el recorrido y las variables
foreach ($carrito as $registro) {
    $nombre = $registro["producto"];
    $precio = (float)$registro["precio"];
    $cantidad = (int)$registro["cantidad"];

}


// Calcular el precio total de la cesta. 

function calcularTotal(array $carrito): float
{

  foreach ($carrito as $registro) {
            $subtotal = $registro["precio"] * $registro["cantidad"];
        $total += $subtotal;
    }

    return $total;
}





