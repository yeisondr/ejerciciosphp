<?php
abstract class Figura {
    // Método abstracto
    abstract protected function calcularArea();

    // Método no abstracto
    public function describir() {
        echo "Esto es una figura geométrica";
    }
}

// Subclase que implementa el método abstracto
class Circulo extends Figura {
    protected $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

$miCirculo = new Circulo(5);
echo $miCirculo->calcularArea(); // Salida: 78.539816339745
?>
