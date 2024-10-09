<?php
require_once '../config/conexion.php';
 // Prepara y ejecuta la consulta para eliminar el libro por su ID
$statement = $conexion->prepare('DELETE FROM libros WHERE id = ?');
$statement->execute([$id]);
?>