<?php

    require 'banco.php';

    $sql = "SELECT * FROM produtos ORDER BY nome ASC";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){

        foreach ($sql->fetchAll() as $produto){
            echo '<tr>';
                echo '<td>'.$produto['id'].'</td>';
                echo '<td>'.$produto['nome'].'</td>';
                echo '<td>'.$produto['descricao'].'</td>';
                echo '<td>' .$produto['preco']. '</td>';
                echo '<td>';
                    echo '<a href="editar.php?id='.$produto['id'].'" class="edit"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>';
                    echo '<a href="excluir.php?id='.$produto['id'].'" class="delete"><i class="material-icons" data-toggle="tooltip" title="Excluir">&#xE872;</i></a>';
                echo '</td>';
             echo '</tr>';
        }

    }

?>













