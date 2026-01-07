<?php
declare(strict_types=1);

// EJERCICIO 2: GSimulador de carrito de compras

// Introducir datos de entrada. ($producto/nombre $precio $cantidad)
$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// 5. Calcular el precio total de la cesta recorriéndola, partiendo de un total de 0€.

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

$sinDescuento = calcularTotal($carrito);

// Definimos el recorrido y las variables y el precio total sin descuentos ($subtotal)
foreach ($carrito as $registro) {
    $nombre = $registro["producto"];
    $precio = (float)$registro["precio"];
    $cantidad = (int)$registro["cantidad"];
    $subtotal = $precio * $cantidad;

// 1. Mostrar la cesta
    echo "Producto: {$nombre}\n";
    echo "Precio/unidad: " . number_format($precio, 2) . " €\n";
    echo "Cantidad: {$cantidad}\n";
    echo "Total: " . number_format($subtotal, 2) . " €\n";
    echo "\n";

}

// 2. Calcular el total y 3. Aplicar descuentos
// Aplicamos el descuento corresponidente por precio (10% - 0.1 5% - 0.5 - 0% 0.0)

$porcentaje = 0.0;

if ($sinDescuento > 1000) {
    $porcentaje = 0.10;
} elseif ($sinDescuento > 500) {
    $porcentaje = 0.05;
}

$descuento = $sinDescuento * $porcentaje;
$total = $sinDescuento - $descuento;

// 4. Mostrar detalles de la cesta

echo "Cesta\n";
echo "\n";
echo "Subtotal: " . number_format($sinDescuento, 2) . " €\n";
echo "Descuento: " . number_format($porcentaje * 100, 0) . "% (" . number_format($descuento, 2) . " €)\n";
echo "Total: " . number_format($total, 2) . " €\n";





