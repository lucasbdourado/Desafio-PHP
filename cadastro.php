<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="crud.php" method="post">
        <label for="cod">Código do Produto:</label>
        <input type="number" id="cod" name="cod">
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" id="descricao" name="descricao">
        <label for="valor">Valor do Produto:</label>
        <input type="text" id="valor" name="valor">
        <label for="codpn">Código (PN):</label>
        <input type="text" id="codpn" name="codpn">
        <label for="quantidade">Quantidade em estoque:</label>
        <input type="text" id="quantidade" name="quantidade">

        <input type="submit" value="Submit">
    </form>
</body>
</html>