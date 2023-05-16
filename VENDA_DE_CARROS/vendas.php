<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <title>Cadastro de produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://fonts.cdnfonts.com/css/bankgothic-lt-bt" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body class="fundo">
    
        <div class="container">
            <h1 style="text-align: center;">cadastro de produtos</h1>
            <br>
        <footer>
            <form action="CRUD/cad_produtos.php" method="post">
               

               
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">nome do comprador: </label>
                        <input type="text" name="prod_name" id="" class="form-control" placeholder="Digite o nome do comprador">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">cpf: </label>
                        <input type="text" name="cpf" id="" class="form-control" placeholder="Digite o cpf">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Valor: </label>
                        <input type="text" name="valor" id="" class="form-control" placeholder="Digite o valor">
                        <br>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Modelo: </label>
                        <input type="text" name="modelo" id="" class="form-control" placeholder="Digite o modelo">
                        <br>
                    </div>
                </div>
                 
                <div class="form-group offset-md-3">
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="cadastrar produto">
                    <a href="menu.php" type="button" class="btn btn-primary float-end">Voltar</a>
                </div> 
               </div>
               
            </form>
        </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  


    </body>
</html>