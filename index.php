
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

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Teste <b>Estação 4</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#modelproduto" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Cadastrar novo produto</span></a>
                    </div>
                </div>
            </div>

            <!--Table de registros-->
            <table class="table table-striped table table-hover">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php require 'lista.php' ?>
                </tbody>
            </table>
        </div><!--/table-wrapper-->

        <!--Modal cadastro-->
        <div id="modelproduto" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="inserir.php" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastrar novo produto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" class="form-control" name="descricao" required>
                            </div>
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="text" class="form-control" name="preco" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-info" value="Salvar">
                        </div>
                    </form>
                </div>
            </div><!--/modal-dialog-->
        </div><!--/addnovoproduto-->
    </div><!--/div-container-->



</body>
</html>