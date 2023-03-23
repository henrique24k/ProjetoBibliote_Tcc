<?php
session_start();
include('conexao.php');


if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
    $texto = $_POST['texto'];

    if ($arquivo['error'])
        die("Falha ao enviar o arquivo");

    $pasta = "arquivos/";
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid(); //dar um nome aleatorio para o arquivo para não sobrescrever
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if ($extensao == "php")
        die("Tipo de arquivo invalido");

    $path = $pasta . $novoNomeArquivo . "." . $extensao;

    $deuCerto = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deuCerto) {
        $mysqli->query("INSERT INTO arquivos (nome, texto, path) VALUES ('$nomeArquivo', '$texto', '$path')") or die($mysqli->error);
        echo "Arquivo enviado com sucesso";
    } else
        echo "Falha ao enviar arquivo";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publique</title>
</head>

<body>

<p>Bem vindo ao painel,
        <?php echo $_SESSION['name']; ?>
    </p>
    <p>
        <a href="logout.php">Sair</a>
    </p>

    <h1>Gostaria de fazer uma publicação?</h1>

    <form enctype="multipart/form-data" method="POST" action="">
        <p><label for="">Digite o que esta pensando</label><input type="text" name="texto"></p>
        <p><label for="">Selecione o arquivo</label>
            <input name="arquivo" type="file">
        </p>
        <button name="upload" type="submit">Enviar arquivo</button>
    </form>

    <a href="timeLine.php">Time Line</a>

</body>

</html>