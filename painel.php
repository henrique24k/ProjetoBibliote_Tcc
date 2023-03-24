<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Time Line</title>
</head>

<body>

<header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" width="50%">
                </a>
                <ul class="nav justify-content-center m-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="#">Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Acervo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Comunidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Serviços</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="perfil.php">
                    <img src="userLogo.png" width="50%">
                </a>
            </div>
        </nav>
    </header>

<p><a href="criarPubli.php">Fazer publicação</a></p>

    <?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "root";
    $base = "sistemalogin";
    $con = mysqli_connect($host, $user, $pass, $base);
    $res = mysqli_query($con, "select * from arquivos"); //consulta BD
    

    //  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)
    

    // enquanto houver dados na tabela 
    while ($arquivo = mysqli_fetch_array($res)) {
        echo "</td> <td>" . $arquivo['texto'] . "</td> </tr>";

        echo '<div class="containerPhp"><img src="' . $arquivo['path'] . '" width="10%" /></div>';
    }

    echo "</table> </br> </br>";

    mysqli_close($con);

    ?>

</body>

</html>


</html>