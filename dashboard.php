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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="cadastro.php">Cadastrar Produtos</a>
    <a href="estoque.php">Adicionar/Remover do Estoque</a>
    <table style="width:100%">
    <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>PN</th>
        <th>Quantidade</th>
    </tr>
    <?php
        $produtos = "SELECT * FROM estoque";

        $resultado = mysqli_query($newconnect,$produtos);

        while($display = mysqli_fetch_array($resultado)){
?>
    <tr>
        <td><?php echo $display['cod'] ?></td>
        <td><?php echo $display['descricao'] ?></td>
        <td><?php echo $display['valor'] ?></td>
        <td><?php echo $display['PN'] ?></td>
        <td><?php echo $display['quantidade'] ?></td>
        <td><a href="editar.php?cod=<?php echo $display['cod']; ?>">Editar</a></td>
        <td><button onclick="excluir('<?php echo $display['cod'];?>');">Excluir</button></td>
    </tr>
<?php
        }
?>
    </table>
</body>
<script>
		function excluir(cod){
			if(window.confirm("Confirma a exclusão do produto de código "+cod+"?")){
				window.location = 'excluir.php?cod=' + cod;
			}
		}
</script>
</html>