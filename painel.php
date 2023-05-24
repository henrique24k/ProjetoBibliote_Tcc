<?php
session_start();
$host = "10.67.168.200";
$user = "tcc_cade_meu_livro";
$pass = "tcc_cade_meu_livro";
$base = "tcc_cade_meu_livro";
$con = mysqli_connect($host, $user, $pass, $base);
$res = mysqli_query($con, "SELECT * FROM resenha ORDER BY idResenha desc"); //consulta BD
$escrever = mysqli_fetch_array($res);
$res2 = mysqli_query($con, "SELECT nome FROM usuario");
$nomeUsuario = mysqli_fetch_array($res2)['nome'];




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Cadê meu livro?</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/logo.png" width="70%">
                </a>
                <ul class="nav justify-content-center m-auto">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="painel.php?email=<?php echo $_GET['email']; ?>">
                            Feed
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="acervo.php?email=<?php echo $_GET['email']; ?>">
                            Acervo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Comunidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Serviços</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="perfil.php?email=<?php echo $_GET['email']; ?>">
                    <img src="./assets/userLogo.png" width="70%">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="resenhas">
            <div class="aside">
                <div class="list-group">
                    <a href="painel.php?email=<?php echo $_GET['email']; ?>"><img src="./logo/pg.png" width="12%">Pagina
                        inicial</a>
                    <a href="acervo.php?email=<?php echo $_GET['email']; ?>"><img src="./logo/acervo.png"
                            width="12%">Acervo</a>
                    <a href="#list-settings" role="tab"><img src="./logo/resenha.png" width="15%">Resenhas</a>
                    <a href="perfil.php?email=<?php echo $_GET['email']; ?>">
                        <img src="./logo/perfil.png" width="15%"> Perfil
                    </a>
                </div>
            </div>
            <div class="resenhaConteudo">
                <div class="col-12">
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action">
                            <h1>Página inicial</h1>
                        </div>
                        <div class="list-group-item list-group-item-action">
                            <div class="escreverPostagem">
                                <form action="salvar_comentario.php" method="GET">
                                    <textarea name="comentario" placeholder="E aí, como foi a leitura?"></textarea><br>
                                    <hr>
                                    <!-- <input class="btn btn-dark" type="submit" value="Resenhar"> -->
                                    <a href="painel.php?email=<?php echo $_GET['email']; ?>">
                                        <button type=submit>Resenhar</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action">
                            <?php
                            while ($escrever = mysqli_fetch_array($res)) {
                                ?>

                                <div class="postagem">
                                    <p>
                                        <?php echo $nomeUsuario; ?> -
                                        <?php echo $escrever['dataResenha']; ?>
                                    </p>
                                    <p>
                                        <?php echo $escrever['textoResenha']; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <main>
</body>

</html>