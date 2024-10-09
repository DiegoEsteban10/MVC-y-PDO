<?php
require_once '../Modelo/crearlibro.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Imprimir para depurar
    var_dump($_POST); // Esto te permitirá ver qué datos estás recibiendo

    $titulo = $_POST['titulo'] ?? null;
    $autor = $_POST['autor'] ?? null;
    $genero = $_POST['genero'] ?? null;
    $año = $_POST['año'] ?? null;

    // Asegúrate de que no hay variables nulas antes de llamar a la función de crear libro
    if ($titulo && $autor && $genero && $año) {
        // Llama al archivo que inserta el libro en la base de datos
        require_once '../Modelo/crearlibro.php';
        header('Location: index.php');
        exit();
    } else {
        echo "Error: faltan datos.";
        exit();
    }
}
?>

