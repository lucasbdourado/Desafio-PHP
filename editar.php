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
    <?php
    if(isset($_GET["cod"])){
		if(is_numeric($_GET["cod"])){
            $codigo = $_GET["cod"];
			$select = "SELECT * from estoque WHERE cod = '$codigo'";
            
            $resultado = mysqli_query($newconnect,$select);
            $produto = mysqli_fetch_array($resultado);

        }
    }
    ?>
    <div class="dashboard">
    <form action="atualizar.php" method="post">
        <input type="hidden" id="oldcod" name="oldcod" value="<?php echo $produto["cod"];?>" required>
        <label for="cod">Código do Produto:</label>
        <input type="number" id="cod" name="cod" value="<?php echo $produto["cod"];?>" required>
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo $produto["descricao"];?>" required>
        <label for="valor">Valor do Produto:</label>
        <input type="text" id="valor" name="valor" value="<?php echo $produto["valor"];?>" required>
        <label for="codpn">Código (PN):</label>
        <input type="text" id="codpn" name="codpn" value="<?php echo $produto["PN"];?>" required>
        <label for="quantidade">Quantidade em estoque:</label>
        <input type="text" id="quantidade" name="quantidade" value="<?php echo $produto["quantidade"];?>" required>
        
        <div class="group-btn">
            <input type="reset" onclick="window.location.href = 'dashboard.php';" value="Voltar">
            <input type="submit" value="Atualizar">
        </div>
    </form>
</div>
</body>
</html>