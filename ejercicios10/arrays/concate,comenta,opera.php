<?php
// Comentario de una sola línea: Definimos las propiedades de dos motos
$moto1_marca = "Yamaha";  // Marca de la primera moto
$moto1_modelo = "R1";     // Modelo de la primera moto
$moto1_año = 2020;        // Año de fabricación de la primera moto

$moto2_marca = "Kawasaki";  // Marca de la segunda moto
$moto2_modelo = "Ninja ZX-10R";  // Modelo de la segunda moto
$moto2_año = 2022;         // Año de fabricación de la segunda moto

// Comentario de varias líneas:
// Aquí realizamos un análisis simple para comparar las dos motos
/*
La comparación que haremos es si las motos son del mismo año.
Si no lo son, veremos cuál es la moto más nueva según el año de fabricación.
*/

// operadores para comparar el modelo de las motos
$son_mismo_año = ($moto1_año == $moto2_año) ? true : false;  // Comparar si ambas motos son del mismo año
$moto_mas_nueva = ($moto1_año > $moto2_año) ? "Yamaha R1" : "Kawasaki Ninja ZX-10R";  // Determinar cuál moto es más nueva

// Concatenación de valores
$mensaje = "La primera moto es una $moto1_marca $moto1_modelo, fabricada en $moto1_año.\n";
$mensaje .= "La segunda moto es una $moto2_marca $moto2_modelo, fabricada en $moto2_año.\n";

if ($son_mismo_año) {
    $mensaje .= "Ambas motos fueron fabricadas el mismo año.\n";
} else {
    $mensaje .= "La moto más nueva es la $moto_mas_nueva.\n";
}


echo $mensaje;
?>
