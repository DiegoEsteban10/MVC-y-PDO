<?php
require_once '../Modelo/crearlibro.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificamos si los datos están siendo enviados correctamente
    $titulo = $_POST['titulo'] ?? null;
    $autor = $_POST['autor'] ?? null;
    $genero = $_POST['genero'] ?? null;
    $año = $_POST['año'] ?? null;

    header('Location: ../index.php');
    exit();
}
?>


