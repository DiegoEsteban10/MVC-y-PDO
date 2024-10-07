<?php
require_once '../controlador/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Prepara y ejecuta la consulta para eliminar el libro por su ID
    $statement = $conexion->prepare('DELETE FROM libros WHERE id = ?');
    $statement->execute([$id]);

    // Redirige de vuelta a la página principal después de la eliminación
    header('Location:index.php');
    exit();
}
?>
