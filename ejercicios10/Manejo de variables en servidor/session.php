<?php
session_start();
$_SESSION['usuario'] = 'yeison';
echo "Usuario de sesión: " . $_SESSION['usuario'];
?>
