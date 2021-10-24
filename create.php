<?php
    include 'connection.php';

    $codigo = addslashes($_POST['cod']);
    $desc = addslashes($_POST['descricao']);
    $valor = addslashes($_POST['valor']);
    $codpn = addslashes($_POST['codpn']);
    $quant = addslashes($_POST['quantidade']);
    $img = $_POST['imglink'];

    $insert = "INSERT INTO estoque (cod, descricao, valor, PN, quantidade, imglink) VALUES ($codigo, '$desc', $valor, '$codpn', $quant, '$img');";

    if (mysqli_query($newconnect, $insert)) {
		echo ("<script>window.alert('Produto Cadastrado!'); window.location.href='dashboard.php';</script>");
	 } else {
		echo "Erro: " . $insert . "
" . mysqli_error($newconnect);
	}
?>