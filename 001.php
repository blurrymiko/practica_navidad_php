<?php
declare(strict_types=1);

// EJERCICIO 1: Gestor de notas de estudiantes

// 1. Introducir datos de entrada. 
# La estructura será $estudiantes - $nombre => $notas
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

// 3. Variables a mostrar ($aprobados $suspensos $mejorEstudiante $mejorPromedio)
# Se colocan fuera porque si no se reiniciarían en cada recorrido.el mejor promedio a -1 para que cualquier promedio real (>=0) lo supere.
$aprobados = 0;
$suspensos = 0;

$mejorEstudiante = "";
$mejorPromedio = -1.0;


// Recorrer los datos de entrada
foreach ($estudiantes as $nombre => $notas) {

  # Calcular el promedio con la función calcularPromedio
  $promedio = calcularPromedio($notas);

  # Definir si aprueban o suspenden en función del promedio (>=6 $aprobado)
  $calificacion = ($promedio >= 6) ? "Aprobado" : "Suspenso";
  if ($calificacion === "Aprobado") {
    $aprobados++;
  } else {
    $suspensos++;
    }

}