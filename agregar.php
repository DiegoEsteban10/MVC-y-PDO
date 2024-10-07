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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar libro</title>
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
            color: ;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .colorcito {
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h1 class="colorcito">Agregar libro</h1>
    <form action="" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor">

        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero">

        <label for="año">Año:</label>
        <input type="number" id="año" name="año">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
