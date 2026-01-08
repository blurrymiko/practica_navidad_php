<?php
declare(strict_types=1);

// EJERCICIO 3: Analizador de texto

// Introducir del texto
$texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// Cambiar al cadena de caracteres a minúsculas y limpiar caracteres especiales.
// • strtolower y strtoupper: Transforman una cadena de caracteres en la misma cadena en minúsculas o mayúsculas respectivamente. • str_replace: reemplaza caracteres en una cadena

$minusculas = mb_strtolower($texto)
$textoFinal = str_replace('/[^\p{L}\p{N}]+/u', ' ', $minusculas);

// Si queremos romper las cadenas en trozos, tenemos: • explode: convierte en array la cadena mediante un separador.


