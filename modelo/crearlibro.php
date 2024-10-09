<?php
require_once '../config/conexion.php';

if (isset($titulo) && isset($autor) && isset($genero) && isset($año)) {
    $statement = $conexion->prepare('INSERT INTO libros (titulo, autor, genero, año) VALUES (?, ?, ?, ?)');
    $statement->execute([$titulo, $autor, $genero, $año]);
} else {
    echo "Error: faltan datos.";
    exit();
}
?>
