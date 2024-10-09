<?php
require_once '../Modelo/consultaEliminar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Llama a la consulta para eliminar el libro
        require_once '../Modelo/consultaEliminar.php'; // Asegúrate de que el ID se pase correctamente aquí.

        // Redirige de vuelta a la página principal después de la eliminación
        header('Location: index.php');
        exit();
    } else {
        echo "Error: ID no definido.";
        exit();
    }
}
?>
