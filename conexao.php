<?php
$usuario = 'tcc_cade_meu_livro';
$senha = 'tcc_cade_meu_livro';
$database = 'tcc_cade_meu_livro';
$host = 'localhost:3306';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$conexao = mysqli_connect($host, $usuario, $senha, $database) or die ('Não foi possível conectar');

if($mysqli->error){
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}

?>