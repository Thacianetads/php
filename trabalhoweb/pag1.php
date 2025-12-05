<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="processamento.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Tel: <input type="text" name="tel"><br>
        Obs: <input type="text" name="obs"><br>
        <input type="hidden" name="tipo" value="cad">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
