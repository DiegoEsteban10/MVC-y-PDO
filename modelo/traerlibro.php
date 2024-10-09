<?php
require_once 'config/conexion.php';

// Consulta para obtener todos los libros
$statement = $conexion->prepare('SELECT * FROM libros');
$statement->execute();
$libros = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
