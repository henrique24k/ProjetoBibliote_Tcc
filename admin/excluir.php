<?php
include('../conexao.php');

$id = $_POST['id'];
$sql =  'DELETE from livro where id = $id';
$query = $mysqli->query($sql);

$query = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <form method="post">
    Id : <input type="text" name="id"> 
    <button name="enviar">Deletar</button>
</form>
</body>
</html>