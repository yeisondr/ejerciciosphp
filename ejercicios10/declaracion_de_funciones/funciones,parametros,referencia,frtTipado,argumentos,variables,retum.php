<?php

// 1. Declaración de función simple: Mostrar el detalle del producto
function mostrarProducto($producto) {
    return "Producto: {$producto['nombre']}, Precio: \$" . number_format($producto['precio'], 2);
}

// 2. Parámetros por valor: Aumentar el precio del producto
function aumentarPrecio($precio) {
    $precio *= 1.1;  // Aumenta el precio en un 10%
    return $precio;
}

// 3. Parámetros por referencia: Modificar el stock del producto
function modificarStock(&$producto, $cantidad) {
    $producto['stock'] += $cantidad;  // Modifica el stock sumando la cantidad pasada
}

// 4. Parámetros con valor por defecto: Si no se pasa un parámetro, el stock se establece en 0
function agregarProducto($nombre, $precio, $stock = 0) {
    return [
        'nombre' => $nombre,
        'precio' => $precio,
        'stock'  => $stock
    ];
}

// 5. Fuerte tipado: Función que calcula el total de la venta de varios productos
function calcularTotal(array $productos): float {
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['precio'] * $producto['stock'];
    }
    return $total;
}

// 6. Argumentos variables: Función que agrega múltiples productos al inventario
function agregarProductosAlInventario(...$productos) {
    $inventario = [];
    foreach ($productos as $producto) {
        $inventario[] = $producto;
    }
    return $inventario;
}

// 7. Uso de `return`: Función para calcular el descuento sobre el total
function aplicarDescuento(float $total, float $descuento): float {
    return $total - ($total * ($descuento / 100));
}

// Creación de productos utilizando la función agregarProducto
$producto1 = agregarProducto("Laptop", 1200, 10);
$producto2 = agregarProducto("Smartphone", 800, 15);
$producto3 = agregarProducto("Tablet", 600);

// Mostrar productos
echo mostrarProducto($producto1) . "\n";
echo mostrarProducto($producto2) . "\n";
echo mostrarProducto($producto3) . "\n";

// Aumentar el precio de un producto
$nuevoPrecio = aumentarPrecio($producto1['precio']);
echo "Nuevo precio de la Laptop: \$" . number_format($nuevoPrecio, 2) . "\n";

// Modificar el stock de un producto
modificarStock($producto2, 5);  // Aumentamos el stock del Smartphone
echo "Nuevo stock del Smartphone: {$producto2['stock']}\n";

// Calcular el total del inventario
$totalInventario = calcularTotal([$producto1, $producto2, $producto3]);
echo "Total del inventario (sin descuento): \$" . number_format($totalInventario, 2) . "\n";

// Aplicar descuento
$descuento = 10;  // 10%
$totalConDescuento = aplicarDescuento($totalInventario, $descuento);
echo "Total con descuento del {$descuento}%: \$" . number_format($totalConDescuento, 2) . "\n";

// Agregar múltiples productos al inventario
$producto4 = agregarProducto("Monitor", 250, 20);
$producto5 = agregarProducto("Teclado", 50, 50);
$inventarioFinal = agregarProductosAlInventario($producto1, $producto2, $producto3, $producto4, $producto5);

// Mostrar todos los productos del inventario final
echo "\nInventario Final:\n";
foreach ($inventarioFinal as $producto) {
    echo mostrarProducto($producto) . "\n";
}

?>
