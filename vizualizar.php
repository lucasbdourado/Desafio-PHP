<?php
    include 'connection.php';

    if(isset($_GET["cod"])){
		if(is_numeric($_GET["cod"])){
            $codigo = $_GET["cod"];
			$select = "SELECT * from estoque WHERE cod = '$codigo'";
            
            $resultado = mysqli_query($newconnect,$select);
            $produto = mysqli_fetch_array($resultado);

        }
    }
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
    <div class="container">
        <main>
            <div class="product-info">
                <img src="<?php echo $produto['imglink']; ?>">
                <div class="information">
                <h2><?php echo $produto['descricao'] ?></h2>
                <p>Código: </b><small><?php echo $produto['cod']?></small>
                <p>Código(PN): </b><small><?php echo $produto['PN']?></small>
                <p>Valor R$:  </b><small><?php echo number_format($produto['valor'],2)?></small>
                <p>Estoque: </b><small><?php if($produto['quantidade'] == 0){echo("ESGOTADO");}else{ echo ($produto['quantidade']);}
                ?></small>
                </div>
            </div>
        </main>
    </div>
</body>
