<?php
session_start();

include("conexao.php");
$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));//O método trim() remove os espaços em branco (whitespaces) do início e/ou fim de um texto. 
$sobrenome = mysqli_real_escape_string($mysqli, trim($_POST['sobrenome']));
$celular = mysqli_real_escape_string($mysqli, trim($_POST['celular']));
$nascimento = mysqli_real_escape_string($mysqli, trim($_POST['nascimento']));
$email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
$senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
// $senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['senha'])));

$sql = "select * from usuario where email = '$email'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

if($row == 1){
    $_SESSION['usuario_exite'] = true;
    header('location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, sobrenome, celular, dtNasc, email, senha) VALUES ('$nome', '$sobrenome', '$celular', '$nascimento', '$email', '$senha')";

if($mysqli->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: cadastro.php');
exit;

?>