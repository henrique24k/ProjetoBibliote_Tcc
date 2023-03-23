<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/noticias.png">
    <link href="css/style.css" rel="stylesheet">
    <title>Time Line</title>
</head>

<body>

    <?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "root";
    $base = "sistemalogin";
    $con = mysqli_connect($host, $user, $pass, $base);
    $res = mysqli_query($con, "select * from arquivos"); //consulta BD
    

    //  executa o comando sql, no caso para pegar todos os usuários do sistema e retorna o valor da consulta em uma variável ($res)
    

    // enquanto houver dados na tabela 
    while ($arquivo = mysqli_fetch_array($res)) {
        echo "</td> <td>" . $arquivo['texto'] . "</td> </tr>";

        echo '<div class="container"><img src="' . $arquivo['path'] . '" width="10%" /></div>';
    }

    echo "</table> </br> </br>";

    mysqli_close($con);

    ?>

</body>

</html>


</html>