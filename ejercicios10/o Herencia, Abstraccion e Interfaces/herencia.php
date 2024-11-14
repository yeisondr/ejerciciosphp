<?php
// Superclase
class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hacerSonido() {
        echo "El animal hace un sonido";
    }
}

// Subclase
class Perro extends Animal {
    public function hacerSonido() {
        echo "El perro ladra";
    }
}

$miPerro = new Perro("Fido");
$miPerro->hacerSonido(); // Salida: El perro ladra
?>
