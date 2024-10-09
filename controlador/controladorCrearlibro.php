<?php

require_once '../Modelo/crearlibro.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $año = $_POST['año'];

    header('Location: index.php');
    exit();
}
?>