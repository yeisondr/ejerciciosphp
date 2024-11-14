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

    // Destructor
    public function __destruct() {
        echo "Objeto destruido: " . $this->nombre . "\n";
    }

    // Método de ejemplo
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . "\n";
    }
}

// Crear una instancia de la clase Persona
$persona1 = new Persona("yeison", 19); // Salida: Objeto creado: Juan (25 años)
$persona1->saludar(); // Salida: Hola, mi nombre es yeiso

// Al final del script o cuando $persona1 es destruido
// Salida: Objeto destruido:yeison
?>
