<?php
require_once '../config/conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Prepara y ejecuta la consulta para eliminar el libro por su ID
    $statement = $conexion->prepare('DELETE FROM libros WHERE id = ?');
    $statement->execute([$id]);
} else {
    echo "Error: ID no definido.";
}
?>
