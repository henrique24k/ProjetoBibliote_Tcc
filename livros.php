<?php

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "sistemalogin";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query ($con, "select * from livro"); //consulta BD



//  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)


echo "<table border=3px> <tr> <td> Código do livro </td> <td> Nome do livro </td> <td> Gênero </td> <td> Autor </td> <td> Data de posse </td> </tr>"; 
// enquanto houver dados na tabela 
while ($escrever = mysqli_fetch_array($res)){
    echo"</td> <td>" . $escrever['idLivro'] . "</td> <td>" . $escrever['nome'] . "</td> 
    <td>" . $escrever['genero'] . "</td> <td>" . $escrever['autor'] . "</td> <td>" . $escrever['dtPosse'] . "</td> </tr>";
}

echo "</table> </br> </br>";

mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
</head>
<body>
    <a href="painel.php">Voltar ao painel</a>
</body>
</html>