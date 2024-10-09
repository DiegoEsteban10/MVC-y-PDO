<?php

require_once '../Modelo/consultaEliminar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Redirige de vuelta a la página principal después de la eliminación
    header('Location:index.php');
    exit();
}

?>
