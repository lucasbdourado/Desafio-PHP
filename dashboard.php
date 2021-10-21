<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
    </tr>
<?php
        }
?>
    </table>
</body>
</html>