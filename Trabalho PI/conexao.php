<?php

    
    $host = "seu_host"; 
    $dbname = "seu_banco";
    $username = "seu_usuario";
    $password = "sua_senha";

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
   
    } catch (PDOException $e) {
        echo "Erro ao conectar no banco de dados: " . $e->getMessage();
    }
   
   

   
    ?>
