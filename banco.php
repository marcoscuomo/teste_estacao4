<?php

    try{
        $pdo = new PDO("mysql:dbname=estacao4;host=localhost","root", "root");
    }catch (PDOException $e){
        echo "Falha ao se conectar ao banco de dados " .$e -> getMessage();
    }


?>