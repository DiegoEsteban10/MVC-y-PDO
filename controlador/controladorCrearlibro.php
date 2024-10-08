<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $año = $_POST['año'];

 require_once '../modelo/crearlibro.php';

    header('Location: index.php');
    exit();
}
?>