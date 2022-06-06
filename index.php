<!-- Chamando o banco de Dados para listar -->
<?php

include 'conexao.php';

$tabela = "SELECT * FROM infracoes"; //nome da Tabela 
$query_tabela = mysqli_query($connx, $tabela);

?>

<!-- Codigo em HTML com plugin do Bootstrap -->
<!doctype html>
<html lang="pt-br">

<head>
    <title>Infrações de Trânsito</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<br>

<header class="header-title">

    <h1>Cadastro de Infrações </h1>
    
</header>

<br>

<body>
    <div class="container">

        <table class="table table-hover table-dark">

            <!-- <table class="table"> -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Placa</th>
                    <th>Descrição Item</th>
                    <th>Preposto</th>
                    <th>Infrator</th>
                    <th>Local</th>
                    <th>Infração</th>
                    <th>Data da Infração</th>
                    <th>Locadora</th>
                    <th>Valor</th>
                    <th>Observação</th>
                </tr>
            </thead>

            <tbody>
                <!-- Trazendo informações dos campos da tabela do Banco -->
                <?php

                while ($dadosDaTabela = mysqli_fetch_array($query_tabela)) {
                    $id = $dadosDaTabela['Id'];
                    $placa = $dadosDaTabela['Placa'];
                    $descricaoItem = $dadosDaTabela['Descrição_Item'];
                    $preposto = $dadosDaTabela['Preposto'];
                    $infrator = $dadosDaTabela['Infrator'];
                    $local = $dadosDaTabela['Local'];
                    $infracao = $dadosDaTabela['Infração'];
                    $dataInfracao = $dadosDaTabela['Data_infracao'];
                    $locadora = $dadosDaTabela['Locadora'];
                    $valor = $dadosDaTabela['Valor'];
                    $observacao = $dadosDaTabela['Observação'];


                ?>

                    <tr>
                        <td scope="row" ><?php echo $id; ?></td>
                        <td ><?php echo $placa; ?></td>
                        <td><?php echo $descricaoItem; ?></td>
                        <td><?php echo $preposto; ?></td>
                        <td><?php echo $infrator; ?></td>
                        <td><?php echo $local; ?></td>
                        <td><?php echo $infracao; ?></td>
                        <td><?php echo $dataInfracao; ?></td>
                        <td><?php echo $locadora; ?></td>
                        <td><?php echo $valor; ?></td>
                        <td><?php echo $observacao; ?></td>

                        <td>
                            <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Excluir</a>
                        </td>

                        <td>
                            <a href="createGet.php?id=<?php echo $id; ?>" class="btn btn-info">Editar</a>
                        </td>
                    </tr>

                    <!-- Finalizei o While -->
                <?php }; ?>

            </tbody>

        </table>
        <p></p>
        <a href="createGet.php" type="button" class="btn btn-success btn-lg btn-block">Cadastrar</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>