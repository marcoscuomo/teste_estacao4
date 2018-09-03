<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Estação 4</title>

    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <?php
        require 'banco.php';

        $id = 0;

        //Verifica se o id existe ou esta vazio
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = addslashes($_GET[id]);
        }

        if(isset($_POST['nome']) && !empty($_POST['nome'])){

            //Atualiza o produto
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $preco = addslashes($_POST['preco']);

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

            $valor = valor($preco);

            $atualiza = "UPDATE produtos set nome = '$nome', descricao = '$descricao', preco = '$valor' WHERE id = '$id'";
            $pdo->query($atualiza);
            header("Location: index.php");

        }

        $sql = "SELECT * FROM produtos WHERE id = '$id' ";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0){
            $produto = $sql->fetch();
        }else{
            header("Location: index.php");
        }






    ?>

    <div class="container ">
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6 table-wrapper">
                <form method="post">
                    <div class="modal-header">
                        <h4 class="table-title">Editar produto</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo $produto['nome']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" name="descricao" value="<?php echo $produto['descricao']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Preço</label>
                            <input type="text" class="form-control" name="preco" value="<?php echo $produto['preco']; ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info" value="Salvar">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</body>
</html>