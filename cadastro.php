<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="dashboard">
        <form action="create.php" method="post">
            <label for="cod">Código do Produto:</label>
            <input type="number" id="cod" name="cod" required>
            <label for="descricao">Descrição do Produto:</label>
            <input type="text" id="descricao" name="descricao" required>
            <label for="valor">Valor do Produto:</label>
            <input type="text" id="valor" name="valor" required>
            <label for="codpn">Código (PN):</label>
            <input type="text" id="codpn" name="codpn" required>
            <label for="quantidade">Quantidade em estoque:</label>
            <input type="text" id="quantidade" name="quantidade" required>
            <label for="imglink">Link para imagem do produto:</label>
            <input type="text" id="imglink" name="imglink" required>
            <div class="group-btn">
                <input type="reset" onclick="window.location.href = 'dashboard.php';" value="Voltar">
                <input type="submit" value="Adicionar">
            </div>
        </form>
    </div>
</body>
</html>