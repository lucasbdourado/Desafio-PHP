<?php
    include 'connection.php';

    $oldcod = addslashes($_POST['oldcod']);
    $codigo = addslashes($_POST['cod']);
    $desc = addslashes($_POST['descricao']);
    $valor = addslashes($_POST['valor']);
    $codpn = addslashes($_POST['codpn']);
    $quant = addslashes($_POST['quantidade']);

    $update = "UPDATE estoque SET cod = $codigo, descricao = '$desc', valor = $valor, PN = '$codpn', quantidade = $quant WHERE cod = '$oldcod'";

    if (mysqli_query($newconnect, $update)) {
		echo ("<script>window.alert('Produto Atualizado!'); window.location.href='dashboard.php';</script>");
	 } else {
		echo "Erro: " . $update . "
" . mysqli_error($newconnect);
	}
?>