<?php
include('../conexao.php');

$sql = 'SELECT * FROM livro';
$query = $mysqli->query($sql);
?>

<div class="card-body">
    <button type="button" class="btn btn-success"><a href="home.php?pag=cadastrarLivroForm"> Add </a></button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Sinopse</th>
                <th scope="col">imagem</th>
            </tr>
        </thead>
        <tbody>
                                                               
            <button type="button" class="btn btn-dark"><a href="excluir.php">Excluir Livro</a></button> <!--ajustar -->
            <button type="button" class="btn btn-warning"><a href="update.php">Editar</a></button>
            <?php
            while ($livros = $query->fetch_assoc()) {
                ;
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $livros['id'] ?>
                    </th>
                    <td>
                        <?php echo $livros['titulo'] ?>
                    </td>
                    <td>
                        <?php echo $livros['autor'] ?>
                    </td>
                    <td>
                        <?php echo $livros['sinopse'] ?>
                    </td>
                    <td>
                        <?php echo $livros['path'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


</div>