<?php

include 'connection.php';

$codigo = $_GET['cod'];

$delete = "DELETE FROM estoque WHERE cod = '$codigo'";

if (mysqli_query($newconnect, $delete)) {
    echo ("<script>window.location.href='dashboard.php';</script>");
 } else {
    echo "Erro: " . $delete . "
" . mysqli_error($newconnect);
}