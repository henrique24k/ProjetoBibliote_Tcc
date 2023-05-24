<?php

// include('conexao.php');

//         $sql_code = sprintf('select * from usuario where email="%s" AND senha="%s"', $_POST['email'], $_POST['senha']);
//         $sql_query = $mysqli->query($sql_code);

//         $usuario = $sql_query->fetch_assoc(); //pegar os dados do BD e jogar dentro da variavel usuario
//         $mensagem = "Email ou senha incorretos";
//                 if(is_null($usuario)){
//                     header(sprintf('location: loginUser.php?mensagem=%s', $mensagem ));
//                     return;
//                 }


//             $_SESSION['id'] = $usuario['idUser'];
//             $_SESSION['name'] = $usuario['nome'];

//             header(sprintf('location: painel.php?email=%s', $_POST['email']));


//             <?php
include('conexao.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
  $resultado = mysqli_query($conexao, $query);

  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_assoc($resultado);

    // Armazena o nível de acesso do usuário na sessão
    $_SESSION["nivelAcesso"] = $row["nivelAcesso"];
    $_SESSION["id"] = $row["id"];
    $_SESSION["nome"] = $row["nome"];

    // Redireciona para a página correta dependendo do nível de acesso
    if ($_SESSION["nivelAcesso"] == "usuario") {
        header(sprintf('location: painel.php?email=%s', $_POST['email']));
    } elseif ($_SESSION["nivelAcesso"] == "bibliotecario") {
        header(sprintf('location: acervobibliotecario.php?email=%s', $_POST['email']));
    }
  } else {
    echo "<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
  }

  mysqli_close($conexao);
}
?>
