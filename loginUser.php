<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) { //se existir começar o processo de login.
    if (strlen($_POST['email']) == 0) { //Qnt de caracteres
        echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']); //função para limpar
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("FALHA NA EXECUÇÃO DO CODIGO SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows; //retornar quantas linha a consulta retornou.

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc(); //pegar os dados do BD e jogar dentro da variavel usuario

            if (!isset($_SESSION)) {
                session_start(); //se não existir sessão iniciar uma nova sessão.
            }

            $_SESSION['id'] = $usuario['idUser'];
            $_SESSION['name'] = $usuario['nome'];

            header("location: painel.php"); //redirecionar o usuario.

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <link rel="icon" href="./assets/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
    <title>Login</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/logoBlack.png" width="50%">
                </a>
                <form class="row g-2 justify-content-end" method="POST">
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually">E-mail</label>
                        <input type="text" class="form-control" name="email" autofocus
                            placeholder="user@etec.sp.gov.br">
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="*********">
                        <!-- <a class="text-black" href="#">Esqueceu a senha?</a> -->
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark mt-4">Login</button>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    <main>

        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="col-sm">
                    <h1>Bem vindo ao nosso serviço</h1>
                    <p>Junte-se a esse universo mágico da leitura</p>
                </div>
                <div class="col-sm">
                    <img src="./assets/imgLog.png" width="80%">
                </div>
                <div class="col-sm">
                    <h3>Entre em nossa comunidade</h3>
                    <p>Registre-se, seja parte de nossos leitores</p>
                    <div class="col-auto">
                        <a href="cadastro.php"><button type="submit" class="btn btn-dark mt-6">Registrar</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    
    </main>
    <footer class="gradient">
    </footer>
</body>

</html>