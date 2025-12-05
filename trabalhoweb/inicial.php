<?php

    include("processamento.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agenda</h1>
    <table border="1"> 
        <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Descrição</th>
        </tr>
        <?php foreach($busca as $i){?>
            <tr>
                <td><?= $i[0] ?></td>
                <td><?= $i[1] ?></td>
                <td><?= $i[2] ?></td>
                <td><?= $i[3] ?></td>
            </tr>
        <?php } ?>
    </table>

    <br><br>
    <a href="pag1.php"><button>Cadastro</button></a>
</body>
</html>
