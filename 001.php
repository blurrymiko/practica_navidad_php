<?php
declare(strict_types=1);

// EJERCICIO 1: Gestor de notas de estudiantes

// 1. Introducir datos de entrada. 
// La estructura será $estudiantes - $nombre => $notas
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6],
];

// 2. Calcular el promedio (pasando las notas a un float)
function calcularPromedio(array $notas): float
{
    if (count($notas) === 0) {
        return 0.0;
    }

    return array_sum($notas) / count($notas);
}



// Recorrer los datos de entrada
//foreach ($estudiantes as $nombre => $notas)