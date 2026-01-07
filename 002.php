<?php
declare(strict_types=1);

// EJERCICIO 2: GSimulador de carrito de compras

// 1. Introducir datos de entrada. ($producto/nombre $precio $cantidad)
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Calcular el precio total de la cesta, partiendo de un total de 0€.

function calcularTotal(array $carrito): float
{
    $total = 0.0;

    foreach ($carrito as $registro) {
        // Subtotal por producto: precio unitario * cantidad
        $subtotal = $registro["precio"] * $registro["cantidad"];
        $total += $subtotal;
    }

    return $total;
}

// Definimos el recorrido y las variables y el precio total sin descuentos ($subtotal)
foreach ($carrito as $registro) {
    $nombre = $registro["producto"];
    $precio = (float)$registro["precio"];
    $cantidad = (int)$registro["cantidad"];
    $subtotal = $precio * $cantidad;
}

$sinDescuento = calcularTotal($carrito);
$Descuento = $sinDescuento * $porcentaje;
$total = $sinDescuento - $porcentaje;






