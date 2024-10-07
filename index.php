<?php
require_once 'conexion.php';

// Consulta para obtener todos los libros
$statement = $conexion->prepare('SELECT * FROM libros');
$statement->execute();
$libros = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca</title>
</head>
<body>
    <h1>Biblioteca</h1>
    <ul>
    <?php foreach ($libros as $libro) { ?>
    <li>
        <strong>Título:</strong> <?= $libro['titulo'] ?><br>
        <strong>Autor:</strong> <?= $libro['autor'] ?><br>
        <strong>Género:</strong> <?= $libro['genero'] ?><br>
        <strong>Año:</strong> <?= $libro['año'] ?>
    </li>
    <?php } ?>
        </ul>

    <form action="agregar.php" method="post">
        <input type="submit" value="Agregar libro">
    </form>
</body>
</html>