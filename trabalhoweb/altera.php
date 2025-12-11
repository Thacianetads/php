<?php
     include("connect.php");


    $id = $_GET['id']; 
    $sql = "SELECT * FROM contatos WHERE id = $id";
    $result = $conn->query($sql);

    $busca = $result->fetch_assoc();
    
    $n = $busca['nome'];
    $t = $busca['tel'];
    $d = $busca['obs'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Contato</title>
</head>
<body>

<h1>Alterar</h1>

<form action="gravaralteracao.php" method="POST">
    
    <input type="hidden" name="tipo" value="alt">
    <input type="hidden" name="id" value="<?php print $id; ?>">

    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?php print $n; ?>" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="tel" value="<?php print $t; ?>" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="obs"><?php print $d; ?></textarea><br><br>

    <button type="submit">Salvar Alterações</button>
    <a href="inicial.php"><button type="button">Cancelar</button></a>

</form>

</body>
</html>