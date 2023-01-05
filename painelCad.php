<?php

include("conexao.php");

$livro = $_POST ['livro'];
$idLivro = $_POST ['idLivro'];
$dtPosse = $_POST['dtPosse'];

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "DBlogin";
$con = $mysqli;

$res = mysqli_query($con,"insert into biblioteca (idLivro, nome, dtPosse) values ($idLivro,'$livro', '$dtPosse')");
echo"Livro alugado com sucesso!";


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