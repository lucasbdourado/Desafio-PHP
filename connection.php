<?php
    $hostname = "localhost";
    $database = "softrental";
    $user = "root";
    $senha = "1234jose";

    $connect = mysqli_connect($hostname, $user, $senha);
    $db = "CREATE DATABASE IF NOT EXISTS softrental";
    $table = "CREATE TABLE `estoque` (
        `cod` INT NOT NULL,
        `descricao` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        `valor` FLOAT NOT NULL DEFAULT 0,
        `PN` VARCHAR(20) NOT NULL DEFAULT '',
        `quantidade` VARCHAR(20) NOT NULL DEFAULT '',
        PRIMARY KEY (`cod`),
        UNIQUE INDEX `PN` (`PN`)
    )COLLATE='utf8mb4_general_ci';";



    if ($connect->connect_error) {
        die("Erro na conexão: " . $connect->connect_error);
    }else{
        if(mysqli_query($connect, $db)){
            $newconnect = mysqli_connect($hostname, $user, $senha, $database);
            
            if ($newconnect->connect_error) {
                die("Erro na conexão: " . $newconnect->connect_error);
            }
            mysqli_query($newconnect,$table);
        }
    }
?>