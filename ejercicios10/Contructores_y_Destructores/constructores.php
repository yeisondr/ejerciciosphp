<?php
class Persona {
    public $nombre;
    public $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        echo "Objeto creado: " . $this->nombre . " (" . $this->edad . " años)\n";
    }

    // Método de ejemplo
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . "\n";
    }
}

// Crear una instancia de la clase Persona
$persona1 = new Persona("yeison", 19); // Salida: Objeto creado: yeison 19 años
$persona1->saludar(); // Salida: Hola, mi nombre es yeison
?>
