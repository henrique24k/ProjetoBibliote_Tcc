<?php
session_start();

include("conexao.php");
// $id = mysqli_real_escape_string($mysqli, trim($_POST['id']));
$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));//O método trim() remove os espaços em branco (whitespaces) do início e/ou fim de um texto. 
$sobrenome = mysqli_real_escape_string($mysqli, trim($_POST['sobrenome']));
$curso = mysqli_real_escape_string($mysqli, trim($_POST['curso']));
$periodo = mysqli_real_escape_string($mysqli, trim($_POST['periodo']));
$instituicao = mysqli_real_escape_string($mysqli, trim($_POST['instituicao']));
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

$sql = "INSERT INTO usuario (nome, sobrenome, curso, periodo, instituicao, email, senha) VALUES ('$nome', '$sobrenome', '$curso', '$periodo', '$instituicao', '$email', '$senha')";

if($mysqli->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: cadastro.php');
exit;

?>