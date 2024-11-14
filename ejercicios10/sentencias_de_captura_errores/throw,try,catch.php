<?php
// Definir una clase de excepción personalizada
class MiExcepcion extends Exception {}

// Función que lanza una excepción
function puedeFallar($valor) {
    if ($valor < 0) {
        throw new MiExcepcion("El valor no puede ser negativo");
    }
    return true;
}

// Bloque try-catch
try {
    // Intentar ejecutar una función que podría fallar
    puedeFallar(-1);
    echo "Ejecutado correctamente";
} catch (MiExcepcion $e) {
    // Capturar la excepción y manejar el error
    echo "¡Error: " . $e->getMessage() . "!";
} finally {
    echo "Este bloque finally se ejecuta siempre, haya o no un error.";
}
?>
