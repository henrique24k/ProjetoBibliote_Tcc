<?php
$host = "10.67.168.200";
$user = "tcc_cade_meu_livro";
$pass = "tcc_cade_meu_livro";
$base = "tcc_cade_meu_livro";

$mysqli = new mysqli($host, $user, $pass, $base);

$conexao = mysqli_connect($host, $user, $pass, $base) or die ('Não foi possível conectar');

if($mysqli->error){
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}

?>