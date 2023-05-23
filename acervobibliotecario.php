<?php
  session_start();
  include('conexao.php');

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Acervo de Livros</title>
</head>
<header>
<nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/logo.png" width="70%">
            </a>
            <ul class="nav justify-content-center m-auto">
            <li class="nav-item">
                        <a class="nav-link text-black">
                            Feed
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black">
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
                <a class="navbar-brand" href="perfil.php">
                    <img src="./assets/userLogo.png" width="70%">
                </a>
            </div>
        </nav>
    </header>
<body>
  <a href='cadastro_livro.php'>cadastrar livros</a>
  <h1>Acervo de Livros</h1>
  <?php

  if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }
  
  $query = "SELECT * FROM livro";
  $resultado = mysqli_query($conexao, $query);
?>
  
<div class="container overflow-hidden">
  <div class="row gy-5">
 
<?php
  // Verifica se encontrou resultados
  if (mysqli_num_rows($resultado) > 0) {
    while ($livro = mysqli_fetch_assoc($resultado)) {
?>

    <div class="col-6">
      <div class="card mb-3 p-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo $livro['nomeImagemLivro'];?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $livro["tituloLivro"];?></h5>
              <p class="card-text"><?php  echo $livro["sinopseLivro"];?></p>
              <!-- Button trigger modal -->
              <input type="submit" value="Reservar" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Reserva de livros</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      <input type="submit" value="Reservar" class="btn btn-dark">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>               
      </div>
    </div>

  <?php
    }
  } else {
    echo "Nenhum livro encontrado.";
  }

  mysqli_close($conexao);
  ?>
    </div>
</div>
</body>
</html>