<?php
interface Manejable {
    public function encender();
    public function apagar();
}

interface Conducible {
    public function acelerar();
}

// Clase que implementa las interfaces
class Coche implements Manejable, Conducible {
    public function encender() {
        echo "El coche está encendido";
    }

    public function apagar() {
        echo "El coche está apagado";
    }

    public function acelerar() {
        echo "El coche está acelerando";
    }
}

$miCoche = new Coche();
$miCoche->encender(); // Salida: El coche está encendido
$miCoche->acelerar(); // Salida: El coche está acelerando
$miCoche->apagar(); // Salida: El coche está apagado
?>
