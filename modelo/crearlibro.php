<?php
require_once '../config/conexion.php';

if (isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['genero']) && isset($_POST['año'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $año = $_POST['año'];

    // Prepara y ejecuta la consulta de inserción
    $statement = $conexion->prepare('INSERT INTO libros (titulo, autor, genero, año) VALUES (?, ?, ?, ?)');
    $statement->execute([$titulo, $autor, $genero, $año]);
} else {
    echo "Error: faltan datos en la inserción.";
}
?>
