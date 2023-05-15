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
        Id : <input type="text" name="id" />
        Titulo : <input type="text" name="titulo" />
        Autor : <input type="text" name="autor" />
        Sinopse : <input type="text" name="sinopse" />
        <!-- Imagem : <input type="file" name="imagem" /> -->
        <button class="btn btn-primary" name="enviar">Alterar</button>
    </form>

    <button type="button" class="btn btn-dark"><a href="home.php">voltar</a></button>


</body>

</html>