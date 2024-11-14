<?php
// Registrar la función de autocarga de clases
spl_autoload_register(function ($nombreClase) {
    include $nombreClase . '.php';
});

// Definir la clase MiClase con una constante y un método
class MiClase {
    const MI_CONSTANTE = 'Un valor constante';

    public function mostrarConstante() {
        echo self::MI_CONSTANTE;
    }
}

// Crear una instancia de la clase MiClase y usar el método mostrarConstante
$objeto = new MiClase();
$objeto->mostrarConstante(); // Salida: Un valor constante
?>
