<?php
include('../conexao.php');

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];

$res = mysqli_query($conexao,"update livro set titulo = '$titulo', autor = '$autor', sinopse = '$sinopse' where id = $id");
echo"Dados alterados com sucesso!";

?>