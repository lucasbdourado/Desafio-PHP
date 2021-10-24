<?php
    $hostname = "localhost";
    $database = "softrental";
    $user = "root";
    $senha = "1234jose";

    $connect = mysqli_connect($hostname, $user, $senha);
    $db = "CREATE DATABASE IF NOT EXISTS softrental";
    $table = "CREATE TABLE IF NOT EXISTS `estoque` (
        `cod` int(11) NOT NULL,
        `descricao` varchar(255) NOT NULL DEFAULT '',
        `valor` float NOT NULL DEFAULT 0,
        `PN` varchar(20) NOT NULL DEFAULT '',
        `quantidade` varchar(20) NOT NULL DEFAULT '',
        `imglink` longtext DEFAULT NULL,
        PRIMARY KEY (`cod`),
        UNIQUE KEY `PN` (`PN`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";



    if ($connect->connect_error) {
        die("Erro na conexão: " . $connect->connect_error);
    }else{
        if(mysqli_query($connect, $db)){
            $newconnect = mysqli_connect($hostname, $user, $senha, $database);
            
            if(mysqli_query($newconnect,$table)){
                echo "<p style='display:none;'>Conectado</p>";
            } else{
                echo "ERROR: Could not able to execute $table. " . mysqli_error($newconnect);
            }
            
        }
    }

?>