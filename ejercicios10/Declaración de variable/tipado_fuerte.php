<?php // tipado fuerde
declare(strict_types=1);  // Activar el tipado estricto

// Función que recibe dos parámetros de tipo entero (int) y devuelve un valor de tipo entero (int)
function resta(int $a, int $b): int {
    return $a - $b;
}

echo resta(50, 20);  


