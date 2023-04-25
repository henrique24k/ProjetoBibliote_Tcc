<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <link rel="icon" href="./assets/logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Acervo</title>
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
                        <a class="btn btn-ligth" href="acervo.php?email=<?php echo $_GET['email']; ?>">
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
    <div class="mainAcervo">
        <div class="filtro">
            <h3>Filtro</h3>
            <hr>
            <h3>Genêro</h3>
            <ul class="list-group">
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">First checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Second x</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
                <li class="">
                    <input class="form-check-input me-1" type="checkbox">
                    <label class="form-check-label">Third checkbox</label>
                </li>
            </ul>
        </div>

        <div class="acervoMain">
            <h3>Top avaliados</h3>
            <div class="container">
                <div class="row g-2">
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 430px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="./imagens/harry5.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p>
                                            <?php 
                                        
                                            // $login = $_POST ['login'];
                                            // $senha = $_POST ['senha'];
                                            
                                            $host = "localhost:3306";
                                            $user = "root";
                                            $pass = "root";
                                            $base = "sistemalogin";
                                            $con = mysqli_connect($host, $user, $pass, $base);
                                            $res = mysqli_query ($con, "select * from arquivos"); //consulta BD
                                            
                                            
                                            //  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)
                                            
                                            
                                           
                                            // enquanto houver dados na tabela 
                                            while ($escrever = mysqli_fetch_array($res)){
                                                echo$escrever;
                                            }
                                            
                                            echo "</table> </br> </br>";
                                            
                                            mysqli_close($con);
                                            
                                            ?>
                                            
                                            
                                
                                        </p>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <button type="button" class="btn btn-dark">Reservar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 430px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="./imagens/pijama.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <button type="button" class="btn btn-dark">Reservar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 430px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="./imagens/principe.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <button type="button" class="btn btn-dark">Reservar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 430px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="./imagens/george.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to
                                            additional content. This content is a little bit longer.</p>
                                        <button type="button" class="btn btn-dark">Reservar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Todos os livros</h3>
            <div class="container">
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 430px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./imagens/it.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <button type="button" class="btn btn-dark">Reservar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 430px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="./imagens/star.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <button type="button" class="btn btn-dark">Reservar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>