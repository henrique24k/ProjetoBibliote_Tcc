<?php
include('../conexao.php');

$id = $_POST['id'];

$res = mysqli_query($conexao,"delete from livro where id = $id");
echo"Dados excluídos com sucesso!";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.php">Voltar</a>
</body>
</html>