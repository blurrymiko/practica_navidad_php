<?php
declare(strict_types=1);

// EJERCICIO 3: Analizador de texto

// Introducir del texto
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

//1. Cambiar al cadena de caracteres a minúsculas y limpiar caracteres especiales.

$minusculas = mb_strtolower($texto, 'UTF-8');
$textoFinal = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $minusculas);

// Si queremos romper las cadenas en trozos, tenemos: 

$trozos = ($textoFinal === '') ? [] : explode(' ', $textoFinal);

// 6. Recorrer cada palabra e ignorar palabras con menos de tres letras

$palabras = [];

foreach ($trozos as $numeroTrozos) {
    if (mb_strlen($numeroTrozos, 'UTF-8') >= 3) {
        $palabras[] = $numeroTrozos;
    }
}

// 2. Contamos el número de palabras
$totalPalabras = count($palabras);

// 3. Contar cuánto se repite cada palabra
$cuenta = array_count_values($palabras);
echo "Texto: {$textoFinal}\n\n";
echo "Palabras: {$totalPalabras}\n\n";
echo "Repetidas (> 1):\n";

$repetidas = false;
foreach ($cuenta as $palabra => $veces) {
    if ($veces > 1) {
        echo "- {$palabra}: {$veces}\n";
        $repetidas = true;
    }
}

if (!$repetidas) {
    echo "Ninguna palabra se repite.\n";
}

// 5. Encontrar la palabra más repetida

$repetida = "";
$repeticiones = 0;

foreach ($cuenta as $palabra => $veces) {
    if ($veces > $repeticiones) {
        $repeticiones = $veces;
        $repetida = $palabra;
    }
}

echo "La palabra {$repetida} es la más repetida: ({$repeticiones}) veces\n";





