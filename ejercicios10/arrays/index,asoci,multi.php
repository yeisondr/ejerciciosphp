<?php
// 8. Arrays indexado, asociativo y multidimensional
$motos = array("yamaha r 6", "Mt 09", "honda cbr 1000");
echo "Array indexado: " . $moto[1] . "<br>"; 

$personaArray = array("nombre" => "yeison", "edad" => 19);
echo "Array asociativo: " . $personaArray["nombre"] . "<br>";  

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "Array multidimensional: " . $matriz[2][1] . "<br>";  

?>