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

// Variables $aprobados $suspensos $mejorEstudiante $mejorPromedio
/* Se declaran fuera del bucle para acumular los resultados.
El mejor promedio se inicializa a -1 para que cualquier promedio real lo supere. */
$aprobados = 0;
$suspensos = 0;

$mejorEstudiante = "";
$mejorPromedio = -1.0;


// 3. Recorrer los datos de entrada
foreach ($estudiantes as $nombre => $notas) {

// Calcular el promedio con la función calcularPromedio
  $promedio = calcularPromedio($notas);

// Definir si aprueban o suspenden en función del promedio (>=6 $aprobado)
  $calificacion = ($promedio >= 6) ? "Aprobado" : "Suspenso";
  if ($calificacion === "Aprobado") {
    $aprobados++;
  } else {
    $suspensos++;
    }

    /* Buscar el mejor promedio posbible comparando el actual con el mejor registrado.
    Solo se actualiza si el actual es mayor, capturando su nombre también. */
    if ($promedio > $mejorPromedio) {
    $mejorPromedio = $promedio;
    $mejorEstudiante = $nombre;
}

# 4. Muestra de resultados individuales ($nombre $promedio $mejorPromedio? $calificacion)
echo "Estudiante: {$nombre}\n";
echo "Promedio: " . number_format($promedio, 2) . "\n";
//echo "Mejor Promedio: "
echo "Calificado: {$calificacion}\n";

}

# 5.1 Muestra $aprobados $suspensos
echo "Aprobados: {$aprobados}\n";
echo "Suspensos: {$suspensos}\n";

# 5.2 Muestra el mejor promedio
echo "Mejor promedio: {$mejorEstudiante} (" . number_format($mejorPromedio, 2) . ")\n";





