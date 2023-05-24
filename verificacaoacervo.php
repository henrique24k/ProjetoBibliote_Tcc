<?php
  session_start();
  include('conexao.php');

  if (mysqli_connect_error()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
  if ($_SESSION["nivel_acesso"] == "usuario") {
    header("Location: acervo.php");
  } elseif ($_SESSION["nivel_acesso"] == "bibliotecario") {
    header("Location: acervobibliotecario.php");
  }
?>