<?php

// Datos del ejercicio
$producto1 = ['nombre' => 'Laptop', 'precio' => 1200, 'stock' => 5];
$producto2 = ['nombre' => 'Smartphone', 'precio' => 800, 'stock' => 15];
$producto3 = ['nombre' => 'Tablet', 'precio' => 600, 'stock' => 0];

// 1. if-else: Verificar si hay stock suficiente
function verificarStock($producto) {
    if ($producto['stock'] > 0) {
        return "Hay stock disponible para {$producto['nombre']}.";
    } else {
        return "No hay stock disponible para {$producto['nombre']}.";
    }
}

echo verificarStock($producto1) . "\n";  // Hay stock disponible
echo verificarStock($producto3) . "\n";  // No hay stock disponible

// 2. switch: Determinar el descuento según el precio
function obtenerDescuento($producto) {
    switch (true) {
        case ($producto['precio'] > 1000):
            return "Descuento del 20% para productos caros.";
        case ($producto['precio'] > 500 && $producto['precio'] <= 1000):
            return "Descuento del 10% para productos medianos.";
        case ($producto['precio'] <= 500):
            return "Descuento del 5% para productos económicos.";
        default:
            return "No se aplica descuento.";
    }
}

echo obtenerDescuento($producto1) . "\n";  // Descuento del 20%
echo obtenerDescuento($producto2) . "\n";  // Descuento del 10%
echo obtenerDescuento($producto3) . "\n";  // Descuento del 5%

// 3. Operador ternario: Verificar si el precio es mayor a 1000
function verificarPrecio($producto) {
    return ($producto['precio'] > 1000) ? "Producto caro." : "Producto económico.";
}

echo verificarPrecio($producto1) . "\n";  // Producto caro.
echo verificarPrecio($producto2) . "\n";  // Producto económico.

// 4. Null coalesce: Comprobar si el stock existe, si no tiene asigna un valor por defecto
function obtenerStock($producto) {
    // Usamos el operador Null Coalesce para asignar 0 si 'stock' no existe
    return $producto['stock'] ?? 0;  // Si 'stock' es null o no está definido, ponemos 0
}

echo "Stock del producto1: " . obtenerStock($producto1) . "\n";  // 5
echo "Stock del producto3: " . obtenerStock($producto3) . "\n";  // 0

// 5. Spaceship  Comparar precios de dos productos
function compararPrecios($producto1, $producto2) {
    $resultado = $producto1['precio'] <=> $producto2['precio'];
    if ($resultado === 1) {
        return "{$producto1['nombre']} es más caro que {$producto2['nombre']}.";
    } elseif ($resultado === -1) {
        return "{$producto1['nombre']} es más barato que {$producto2['nombre']}.";
    } else {
        return "{$producto1['nombre']} tiene el mismo precio que {$producto2['nombre']}.";
    }
}

echo compararPrecios($producto1, $producto2) . "\n";  // Laptop es más caro que Smartphone
echo compararPrecios($producto2, $producto3) . "\n";  // Smartphone es más caro que Tablet

?>
