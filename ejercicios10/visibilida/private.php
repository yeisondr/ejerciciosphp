<?php
class MiClase {
    private $propiedadPrivada = 'Privada';

    private function metodoPrivado() {
        echo "Este es un método privado";
    }

    public function accederPrivado() {
        echo $this->propiedadPrivada; // Accede a la propiedad privada
        $this->metodoPrivado(); // Llama al método privado
    }
}

$objeto = new MiClase();
$objeto->accederPrivado(); // Salida: Privada Este es un método privado
?>
