<?php

// 1.Booleano
$booleanoVerdadero = true;
$booleanoFalso = false;
echo "Booleano: " . ($booleanoVerdadero ? "verdadero" : "falso") . "<br>";  // true
echo "Booleano: " . ($booleanoFalso ? "verdadero" : "falso") . "<br>";  // false

// 2.Entero (int)
$entero = 52;
echo "Entero: " . $entero . "<br>";  

// 3.string
$cadena = "Yeison david!";
echo "Cadena: " . $cadena . "<br>";  

// 4.Número decimal float
$decimal = 5.85;
echo "Decimal: " . $decimal . "<br>";  

// 5. NaN Not a Number
$nan = acos(8);  // Esto devuelve NaN porque acos(8) no es un valor válido.
echo "NaN: " . $nan . "<br>";  // NAN

// 6. Null
$valorNull = null;
echo "Null: " . ($valorNull === null ? "Es null" : "No es null") . "<br>";  

// 7. Object 
class Persona {
    public $nombre;
    public $edad;

    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}

$persona = new Persona("Juan", 30);
echo "Objeto: " . $persona->nombre . " tiene " . $persona->edad . " años.<br>";  // Juan tiene 30 años.


?>
