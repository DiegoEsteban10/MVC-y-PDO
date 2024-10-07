<?php
require_once 'conexion.php';

// Consulta para obtener todos los libros
$statement = $conexion->prepare('SELECT * FROM libros');
$statement->execute();
$libros = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        
              body {
            font-family: Arial, sans-serif;
            background-image: url('biblioteca.png'); /* Establecer la imagen como fondo */
            background-size: cover; /* Cubrir todo el fondo */
            background-repeat: no-repeat; /* No repetir la imagen */
            margin: 0;
            padding: 20px;
            color: #333;
            opacity: 0.9; /* Opacidad para que el texto sea legible */
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrar elementos horizontalmente */
            justify-content: center; /* Centrar elementos verticalmente */
            height: 100vh; /* Altura completa de la ventana */
        }
        h1 {
            text-align: center;
            color: #444;
        }
        .libro-list {
            list-style: none;
            padding: 0;
            max-width: 600px;
            margin: 20px auto;
        }
        .libro-list li {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .libro-list li strong {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        .add-book-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
        }
        .add-book-btn:hover {
            background-color: #218838;
        }
        .colorcito {
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h1 class="colorcito">Biblioteca</h1>
    <ul class="libro-list">
        <?php foreach ($libros as $libro) { ?>
        <li>
            <strong>Título:</strong> <?= $libro['titulo'] ?>
            <strong>Autor:</strong> <?= $libro['autor'] ?>
            <strong>Género:</strong> <?= $libro['genero'] ?>
            <strong>Año:</strong> <?= $libro['año'] ?>
        </li>
        <?php } ?>
    </ul>

    <a href="agregar.php" class="add-book-btn">Agregar libro</a>
</body>
</html>
