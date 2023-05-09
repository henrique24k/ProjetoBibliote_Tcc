<?php
include('../conexao.php');

$sql = 'SELECT * FROM livro';
$query = $mysqli->query($sql);
?>

        <div class="card-body">
            <a href="home.php?pag=cadastrarLivroForm"> Add </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Sinopse</th>
                        <th scope="col">imagem</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

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
                            <td>
                                <a href=""> Editar </a> |
                                <a href="excluir.php"> Excluir </a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
