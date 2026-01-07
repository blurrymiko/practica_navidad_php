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

// Aplicamos el descuento corresponidente por precio (10% - 0.1 5% - 0.5 - 0% 0.0)

$porcentaje = 0.0;

if ($sinDescuento > 1000) {
    $porcentaje = 0.10;
} elseif ($sinDescuento > 500) {
    $porcentaje = 0.05;
} else {
    $porcentaje = 0.0;
}

$Descuento = $sinDescuento * $porcentaje;
$total = $sinDescuento - $porcentaje;

// Mostrar detalles de la cesta

echo "Cesta\n";
echo "\n";
echo "Subtotal: " . number_format($sinDescuento, 2) . " €\n";
echo "Total: " . number_format($total, 2) . " €\n";





