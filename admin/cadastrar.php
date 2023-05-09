<?php
include('../conexao.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];

if (isset($_FILES['path'])) {
    $img = $_FILES['path'];

    $dir = '../imagens/';
    $nomeImg = $img['name'];
    $path = $dir.$nomeImg;

    move_uploaded_file($img["tmp_name"], $path);

    $sql = sprintf('INSERT INTO livro (titulo, autor, sinopse, path)
    VALUES ("%s", "%s", "%s", "%s")', $titulo, $autor, $sinopse, $nomeImg);

    $res = mysqli_query($mysqli, $sql);

    $conexao->close();
}

header('location: home.php?pag=dashboard');
?>
