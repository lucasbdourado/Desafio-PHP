<?php
 include 'connection.php';

    $codigo = $_POST['produtos'];
    $quant = (int) $_POST['quantidade'];
    $operação = $_POST['operacao'];

    if($operação == "adicionar"){
            $select = "SELECT * FROM estoque WHERE cod = $codigo";
            $query = mysqli_query($newconnect,$select);
            $produto = mysqli_fetch_array($query);
            
            $oldquant = (int) $produto['quantidade'];
            
            $resultado = $oldquant + $quant;

            $adicionar = "UPDATE estoque SET quantidade = $resultado WHERE cod = $codigo";

            if (mysqli_query($newconnect, $adicionar)) {
                echo ("<script>window.alert('Estoque Atualizado!'); window.location.href='dashboard.php';</script>");
             } else {
                echo "Erro: " . $adicionar . " " . mysqli_error($newconnect);
            }
    }else{
        $select = "SELECT * FROM estoque WHERE cod = $codigo";
        $query = mysqli_query($newconnect,$select);
        $produto = mysqli_fetch_array($query);
            
        $oldquant = (int) $produto['quantidade'];
            
        $resultado = $oldquant - $quant; 
        
        if(($oldquant - $quant) < 0){
            echo ("<script>window.alert('Não há quantidade suficiente no estoque para esta retirada!'); window.location.href='dashboard.php';</script>");
        }else{
            $subtrair = "UPDATE estoque SET quantidade = $resultado WHERE cod = $codigo";

            if (mysqli_query($newconnect, $subtrair)) {
                echo ("<script>window.alert('Estoque Atualizado!'); window.location.href='dashboard.php';</script>");
             } else {
                echo "Erro: " . $subtrair . " " . mysqli_error($newconnect);
            }
        }
    }
?>
