<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Alterar</title>
</head>

<body>
    <form action="updateBack.php" method="post" enctype="multipart/form-data">
        id : <input type="text" name="id" /><br>
        Nome : <input type="text" name="nome" /><br>
        Sobrenome : <input type="text" name="sobrenome" /><br>
        Curso : <input type="text" name="curso" /><br>
        Periodo : <input type="text" name="periodo" /><br>
        Instituição : <input type="text" name="instituicao" /><br>
        Email : <input type="email" name="email" /><br>
        Senha : <input type="password" name="senha" /><br>
        <!-- Imagem : <input type="file" name="imagem" /> -->
        <button class="btn btn-primary" name="enviar">Alterar</button>
    </form>


</body>

</html>