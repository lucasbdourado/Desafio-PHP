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
    <form action="operacao.php" method="post">
        <label for="produtos">Escolha o Produto:</label>
        <select name="produtos" id="produtos">
        <?php
            $produtos = "SELECT * FROM estoque";

            $resultado = mysqli_query($newconnect,$produtos);

            while($display = mysqli_fetch_array($resultado)){
        ?>
            <option value="<?php echo $display['cod'] ?>"><?php echo $display['descricao'] ?></option>
        <?php
            }
        ?>
        </select>
        <label for="quantidade">Quantidade:</label>
        <input type="text" id="quantidade" name="quantidade" required>
        <p>Operação Realizada:</p>
        <input type="radio" id="adicionar" name="operacao" value="adicionar">
        <label for="adicionar">Adicionar</label>
        <input type="radio" id="remover" name="operacao" value="remover">
        <label for="remover">Remover</label>

        <input type="submit" value="Atualizar">
    </form>
</body>
</html>