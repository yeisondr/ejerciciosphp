<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "ID: " . htmlspecialchars($id);
}
?>
