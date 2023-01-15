<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){ //se existir começar o processo de login.
    if(strlen($_POST['email']) == 0){ //Qnt de caracteres
        echo "Preencha seu email";
    }
    else if(strlen($_POST['senha'])== 0){
        echo "Preencha sua senha";
    }
    else{
        $email = $mysqli->real_escape_string($_POST['email']); //função para limpar
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("FALHA NA EXECUÇÃO DO CODIGO SQL: " . $mysqli->error);
        
        $quantidade = $sql_query->num_rows; //retornar quantas linha a consulta retornou.

        if($quantidade ==1){
            $usuario = $sql_query->fetch_assoc(); //pegar os dados do BD e jogar dentro da variavel usuario
            
            if(!isset($_SESSION)){
                session_start(); //se não existir sessão iniciar uma nova sessão.
            }

            $_SESSION['id'] = $usuario['idProf'];
            $_SESSION['name'] = $usuario['nome'];

            header("location: painelProf.php"); //redirecionar o usuario.

        }
        else{
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
    <title>Login Professor</title>
</head>
<body>
    <h1>Acesse sua conta profissional</h1>
    <form action="" method="POST"> <!-- ir para a propria pag index -->
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>

    </form>
</body>
</html>