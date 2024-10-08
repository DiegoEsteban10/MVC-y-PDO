<?php
require_once '../config/conexion.php';
$statement = $conexion->prepare('INSERT INTO libros (titulo, autor, genero, año) VALUES (?, ?, ?, ?)');
    $statement->execute([$titulo, $autor, $genero, $año]);

?>