<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./estilo/style.css">
    <title>Sistema de Cadastro</title>
</head>

<body>

    <div>
        <h3>Sistema de Cadastro</h3>
        <p>Faça login informando o seu usuário e senha <a href="loginUser.php">aqui</a></p>
        <div>
            <form action="cadastrar.php" method="POST" enctype="multpart/form-data">
                <!-- <div>
                    <div>
                        <input name="id" type="text" placeholder="RM ou RG" autofocus>
                    </div>
                </div> -->
                <div>
                    <div>
                        <input name="nome" type="text" placeholder="Nome">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="sobrenome" type="text" placeholder="Sobrenome">
                    </div>
                </div>
                <!-- <div>
                    <div>
                        <input name="foto" type="file">
                    </div>
                </div> -->
                <div>
                    <div>
                        <input name="curso" type="text" placeholder="Curso">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="periodo" type="text" placeholder="Periodo">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="instituicao" type="text" placeholder="Instituicao">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="email" type="text" placeholder="E-mail">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="senha" type="password" placeholder="Senha">
                    </div>
                </div>
                <div>
                    <div>
                        <input name="rgrm" type="text" placeholder="Rg ou Rm">
                    </div>
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>


</body>

</html>