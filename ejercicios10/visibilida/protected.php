<?php
class MiClase {
    protected $propiedadProtegida = 'Protegida';

    protected function metodoProtegido() {
        echo "Este es un método protegido";
    }
}

class SubClase extends MiClase {
    public function accederMetodoProtegido() {
        echo $this->propiedadProtegida; // Accede a la propiedad protegida
        $this->metodoProtegido(); // Llama al método protegido
    }
}

$objeto = new SubClase();
$objeto->accederMetodoProtegido(); // Salida: Protegida Este es un método protegido
?>
