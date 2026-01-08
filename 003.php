<?php
declare(strict_types=1);

// EJERCICIO 3: Analizador de texto

// Introducir del texto
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

//1. Cambiar al cadena de caracteres a minúsculas y limpiar caracteres especiales.

$minusculas = mb_strtolower($texto)
$textoFinal = str_replace('/[^\p{L}\p{N}]+/u', ' ', $minusculas);

// Si queremos romper las cadenas en trozos, tenemos: • explode: convierte en array la cadena mediante un separador.

$trozos = ($textoFinal === '') ? [] : explode(' ', $textoFinal);

// 6. Recorrer cada palabra e ignorar palabras con menos de tres letras

$palabras = [];

foreach ($trozos as $trozos) {
    if (mb_strlen($trozos, 'UTF-8') >= 3) {
        $palabras[] = $trozos;
    }
}

// 2. Contamos el número de palabras
$totalPalabras = count($palabras);

// 3. 

