<?php

    require 'banco.php';

    //Pegando os valores do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    //Query de inserção
    $sql = "INSERT INTO produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco'; ";
    echo $sql;

    //Executa a query
    $pdo->query($sql);

    //Retorna para a pagina inicial
    header("Location: index.php");

?>