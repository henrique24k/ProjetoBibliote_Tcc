<?php
session_start();
include('conexao.php');

$id = $_SESSION["id"];

if (isset($_SESSION)) {

    $resenha = $_GET["comentario"];
    $sql_query = $conexao->query("SELECT * FROM resenha") or die(mysqli->error);
    if ($resenha != "") {
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("y-m-d");
        $conexao->query("INSERT INTO resenha (textoResenha, dataResenha) VALUES('$resenha', '$data')") or die($conexao->error);
        echo "<script language='javascript' type='text/javascript'>
        alert('Resenha armazenada com sucesso!');</script>";
    } else {
        echo "<p> Falha ao carregar arquivo</p>";
    }
}
// Após salvar o comentário no banco de dados, você pode redirecionar o usuário de volta para a página do feed
// header("Location: perfil.php");
header(sprintf('location: painel.php?email=%s', $_POST['email']));
exit;
?>