<?php
session_start();
include('conexao.php');

if (isset($_FILES['arquivo'])) {
  $linkarquivo = $_FILES['arquivo'];

  if ($linkarquivo['error']){
      die("Falha ao enviar o arquivo");
}
$sql_query = $conexao->query ("SELECT * FROM livro" ) or die(mysqli->error);
   

  $pasta = "fotos1/";
  $nomeArquivo = $linkarquivo['name'];
  $novoNomeArquivo = uniqid(); //dar um nome aleatorio para o arquivo para não sobrescrever
  $extensao = pathinfo($nomeArquivo,PATHINFO_EXTENSION);
  $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

  if ($extensao !="jpg" && $extensao !="png"){
      die("Tipo de arquivo invalido");
  }

  if($linkarquivo['size'] > 345678909876){
    die("Foto muito grande");
    }

    $path = ($pasta . $nomeArquivo . "." . $extensao);

  $deuCerto = move_uploaded_file($linkarquivo["tmp_name"], $path);
  if ($deuCerto) {
      echo "Arquivo enviado com sucesso";
  } else{
      echo "Falha ao enviar arquivo";
      }
}
?>
  
  <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Document</title>
</head>
<!DOCTYPE html>
<html>
<head>
  <body>
    <h1>Cadastro de Livros</h1>
    <form method="post" action="cadastro_livro.php" enctype="multipart/form-data">
      <label for="titulo">Título:</label><br>
      <input type="text" id="titulo" name="titulo" required><br>
      <label for="sinopse">Sinopse:</label><br>
      <textarea id="sinopse" name="sinopse" required></textarea><br>
      <label for="autor">Autor:</label><br>
      <input type="text" id="autor" name="autor" required><br>
      <label for="genero">Gênero:</label><br>
      <input type="text" id="genero" name="genero" required><br>
      <label for="editora">Editora:</label><br>
      <input type="text" id="editora" name="editora" required><br>
      <input name="arquivo" type="file"><br>
      <input type="submit" value="Cadastrar">
    </form>
  </body>
  </html>

  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST["titulo"];
  $sinopse = $_POST["sinopse"];
  $autor = $_POST["autor"];
  $genero = $_POST["genero"];
  $editora = $_POST["editora"];

  if (mysqli_connect_error()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }

  $query = "INSERT INTO livro (tituloLivro, sinopseLivro, autorLivro, generoLivro, editoraLivro, nomeImagemLivro) VALUES ('$titulo', '$sinopse', '$autor', '$genero', '$editora', '$path')";
  $resultado = mysqli_query($conexao, $query);
  
  // Verifica se a inserção foi bem sucedida
  if ($resultado) {
  echo "<script language='javascript' type='text/javascript'>
    alert('Livro cadastrado com sucesso!');window.location.href='acervobibliotecario.php';</script>";
  } else {
    echo"<p> Falha ao cadastrar o livro</p>" . mysqli_error($conexao);
  }
  
  mysqli_close($conexao);
  }
  ?>