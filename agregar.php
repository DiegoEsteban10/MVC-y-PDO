<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $año = $_POST['año'];

$statement = $conexion->prepare('INSERT INTO libros (titulo, autor, genero, año) VALUES (?, ?, ?, ?)');
$statement->execute([$titulo, $autor, $genero, $año]);

header('Location: index.php');
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar libro</title>
</head>
<body>
    <h1>Agregar libro</h1>
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo"><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero"><br>
        <label for="año">Año:</label>
        <input type="number" id="año" name="año"><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>