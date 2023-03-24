<?php
session_start();
include('conexao.php');

// $login = $_POST ['login'];
// $senha = $_POST ['senha'];

$host = "localhost:3306";
$user = "root";
$pass = "root";
$base = "sistemaLogin";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query ($con, "select * from usuario"); //consulta BD


//  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)


// enquanto houver dados na tabela 
    while ($escrever = mysqli_fetch_array($res)){
        echo"<ul>
        <li>" . $escrever['rmRg'] . "</li> 
        <li>" . $escrever['nome'] . "</li>
        <li>" . $escrever['sobrenome'] . "</li>
        <li>" . $escrever['foto'] . "</li>
        <li>" . $escrever['curso'] . "</li>
        <li>" . $escrever['periodo'] . "</li> 
        <li>" . $escrever['instituicao'] . "</li>
        <li>" . $escrever['email'] . "</li>
        </ul>";
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
    <title>Perfil</title>
</head>

<body>
    <p>Bem vindo ao seu perfil,
        <?php echo $_SESSION['name']; ?>
    </p>

    <a href="painel.php">Voltar a Time Line</a>
    <a href="Editperfil.php">editar Perfil</a>



</body>

</html>