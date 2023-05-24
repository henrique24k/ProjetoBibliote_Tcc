<?php
session_start();
include('conexao.php');

$host = "10.67.168.200";
$user = "tcc_cade_meu_livro";
$pass = "tcc_cade_meu_livro";
$base = "tcc_cade_meu_livro";
$con = mysqli_connect($host, $user, $pass, $base);

$sql = sprintf('select * from usuario where email="%s"', $_GET['email']);
$res = mysqli_query($con, $sql); //consulta BD
$escrever = mysqli_fetch_array($res);



//  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)



// enquanto houver dados na tabela 


mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Perfil</title>
</head>

<body>

    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-left ">
                <img class="rounded-4" src="./logo/perfil.png" height="100" width="100" />
                <span class="name mt-3">
                    <?php
                    echo $escrever['nome'] . PHP_EOL;
                    echo $escrever['sobrenome'];
                    ?>
                </span>
                <span class="txtprofile">
                    <?php
                    echo $escrever['curso'];
                    ?>
                </span>
                <span>
                    <?php
                    echo $escrever['periodo'];
                    ?>
                </span>
                <span>
                    <?php
                    echo $escrever['instituicao'];
                    ?>
                </span>
                <span>
                    <?php
                    echo $escrever['email'];
                    ?>
                </span>
                <span>
                    <?php
                    echo $escrever['rm'];
                    ?>
                </span>
                <div class=" d-flex mt-2">
                    <a href="Editperfil.php">
                        <button class="btn1 btn-dark">Edit Profile</button>
                    </a>
                </div>
                <div class=" d-flex mt-2">
                    <a href="painel.php?email=<?php echo $_GET['email']; ?>">
                        <button class="btn1 btn-dark">feed</button>
                    </a>
                </div>
            </div>

        </div>

    </div>

</body>

</html>