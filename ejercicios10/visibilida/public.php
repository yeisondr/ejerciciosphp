<?php
class MiClase {
    public $propiedadPublica = 'Publica';

    public function metodoPublico() {
        echo "Este es un método público";
    }
}

$objeto = new MiClase();
echo $objeto->propiedadPublica; // Salida: Publica
$objeto->metodoPublico(); // Salida: Este es un método público
?>
