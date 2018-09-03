<?php

    require 'banco.php';

    //Pegando os valores do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['preco'];


    //Função para ajustar o valor digitado com virgula
    function valor($valor) {
        $verificaPonto = ".";
        if(strpos("[".$valor."]", "$verificaPonto")):
            $valor = str_replace('.','', $valor);
            $valor = str_replace(',','.', $valor);
        else:
            $valor = str_replace(',','.', $valor);
        endif;

        return $valor;
    }

    $valor = valor($valor);


    //Query de inserção
    $sql = "INSERT INTO produtos SET nome = '$nome', descricao = '$descricao', preco = '$valor'; ";
    echo $sql;

    //Executa a query
    $pdo->query($sql);

    //Retorna para a pagina inicial
    header("Location: index.php");

?>