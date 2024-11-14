<?php
// Union Types
function sumar(int|float $a, int|float $b): int|float {
    return $a + $b;
}

// Nullsafe Operator
$usuario = null;
echo $usuario?->nombre; // No causa error si $usuario es nulo

// Constructor Property Promotion
class Producto {
    public function __construct(public string $nombre, public float $precio) {}
}

$producto = new Producto("Televisor", 500.00);
echo $producto->nombre;

// Enums en PHP 8.1
enum Estado: string {
    case ACTIVO = 'activo';
    case INACTIVO = 'inactivo';
}
$estado = Estado::ACTIVO;
echo $estado->value;
?>