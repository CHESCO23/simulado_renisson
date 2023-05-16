<?php
    require("conn.php");

    $tabela = $pdo->prepare("SELECT id, modelo,preço,concessionaria
    FROM patio_01;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Carros a venda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Carros a venda</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID VENDAS</th>
            <th scope="col">MODELO</th>
            <th scope="col">VALOR</th>
            <th scope="col">CONCESSIONARIA</th>
            <th scope="col">VENDER</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id']."</th>";
                echo "<td>".$linha['modelo']."</td>";
                echo "<td>".$linha['preço']."</td>";
                echo "<td>".$linha['concessionaria']."</td>";
                echo '<td><a href=vendas.php?class="btn btn-danger">Vender</a></td>';
                echo '</tr>';

            }
            ?>
        </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">VOLTAR</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>