
<?php
include('conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$instituicao = $_POST['instituicao'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$res = mysqli_query($conexao, "update usuario set nome = '$nome', sobrenome = '$sobrenome', curso = '$curso',  periodo = '$periodo', instituicao = '$instituicao', email = '$email', senha = '$senha' where id = $id");
echo "Dados alterados com sucesso!";

?>