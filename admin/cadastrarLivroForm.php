<?php
include('../conexao.php');

$sql = 'SELECT * FROM livro';
$query = $mysqli->query($sql);
?>

    <div class="card">
        
        </div>
    </div>

    <div class="login">
        <div class="boxLogin">
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>titulo</label>
                    <input name="titulo" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Autor</label>
                    <input name="autor" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Sinopse</label>
                    <input name="sinopse" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Imagem</label>
                    <input name="path" type="file">
                </div>
                
                <div class="mb-3">
                    <button class="btn btn-dark" type="submit">Cadastrar</button>
                </div>
        </div>
        </form>
    </div>