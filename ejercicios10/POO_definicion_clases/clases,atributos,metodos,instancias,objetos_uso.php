<?php
class carro {
    // Atributos
    public $marca;
    public $nombre;

    // Constructor
    public function __construct($marca, $nombre) {
        $this->marca = $marca;
        $this->nombre = $nombre;
    }

    // Método
    public function describir() {
        return "this is a  " . $this->marca . " " . $this->nombre;
    }
}

// Crear instancias de la clase Coche
$coche1 = new carro("Toyota", "zupra");
$coche2 = new Carro("nissan", "skyline");

// Usar métodos del objeto
echo $coche1->describir(); 
echo $coche2->describir(); 
