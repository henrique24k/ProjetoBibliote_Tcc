<?php

include("conexao.php");

$idLivro = $_POST ['idLivro'];
$livro = $_POST ['livro'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$dtPosse = $_POST['dtPosse'];

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "DBlogin";
$con = $mysqli;

$res = mysqli_query($con, "insert into livro (idLivro, nome, genero, autor, dtPosse) values ($idLivro,'$livro', '$genero', '$autor', '$dtPosse')");
echo "Livro cadastrado com sucesso!";

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alugado</title>
</head>
<body>
    <a href="painel.php">Voltar ao painel</a>
</body>
</html>