<?php
setcookie("nombreUsuario", "yeison", time() + 3600, "/");
if (isset($_COOKIE['nombreUsuario'])) {
    echo "Nombre de usuario en cookie: " . htmlspecialchars($_COOKIE['nombreUsuario']);
}
?>
