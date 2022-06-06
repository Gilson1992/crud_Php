<?php

include "conexao.php";

$id = filter_input(INPUT_GET, "id");

$result = [];

if ($id) {

    $tabela = "SELECT * FROM infracoes  WHERE id = '$id' "; //nome da Tabela 
    $query_tabela = mysqli_query($connx, $tabela);
    $result = mysqli_fetch_array($query_tabela);
}

$id = array_key_exists("id", $result) ? $result["id"] : "";
$placa = array_key_exists("Placa", $result) ? $result["Placa"] : "";
$descricaoItem = array_key_exists("Descrição_Item", $result) ? $result["Descrição_Item"] : "";
$preposto = array_key_exists("Preposto", $result) ? $result["Preposto"] : "";
$infrator = array_key_exists("Infrator", $result) ? $result["Infrator"] : "";
$local = array_key_exists("Local", $result) ? $result["Local"] : "";
$infracao = array_key_exists("Infração", $result) ? $result["Infração"] : "";
$dataInfracao = array_key_exists("Data_infracao", $result) ? $result["Data_infracao"] : "";
$locadora = array_key_exists("Locadora", $result) ? $result["Locadora"] : "";
$valor = array_key_exists("Valor", $result) ? $result["Valor"] : "";
$observacao = array_key_exists("Observação", $result) ? $result["Observação"] : "";;


$id ? "update.php" : "create.php";

?>


<!doctype html>
<html lang="pt-br">

<!-- Criando o Formulário para executar o Create -->

<head>
    <title>Cadasto de infrações</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<div class="corpo">
    
    
<body class="container">

    <form action=<?php echo $id ? "update.php" : "create.php" ?> method="post">
     <br>   
    <input type="hidden" name="Id" value="8">
        <div class="text-dark">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id="Placa" name="Placa" value="<?php echo $placa; ?>" >
        </div>
        <div class="text-dark">
            <label for="Descrição_Item">Descrição_Item</label>
            <input type="text" class="form-control" id="Descrição_Item" name="Descrição_Item" value="<?php echo $descricaoItem; ?>">
        </div>
        <div class="text-dark">
            <label for="Preposto">Preposto</label>
            <input type="text" class="form-control" id="Preposto" name="Preposto" value="<?php echo $preposto; ?>">
        </div>
        <div class="text-dark">
            <label for="Infrator">Infrator</label>
            <input type="text" class="form-control" id="Infrator" name="Infrator" value="<?php echo $infrator; ?>">
        </div>
        <div class="text-dark">
            <label for="Local">Local</label>
            <input type="text" class="form-control" id="Local" name="Local" value="<?php echo $local; ?>">
        </div>
        <div class="text-dark">
            <label for="Infração">Infração</label>
            <input type="text" class="form-control" id="Infração" name="Infração" value="<?php echo $descricaoItem; ?>">
        </div>
        <div class="text-dark">
            <label for="Data da Infração">Data da Infração</label>
            <input type="text" class="form-control" id="Data da Infração" name="Data_infracao" value="<?php echo $dataInfracao; ?>">
        </div>
        <div class="text-dark">
            <label for="Locadora">Locadora</label>
            <input type="text" class="form-control" id="Locadora" name="Locadora" value="<?php echo $locadora; ?>">
        </div>
        <div class="text-dark">
            <label for="Valor">Valor</label>
            <input type="text" class="form-control" id="Valor" name="Valor" value="<?php echo $valor; ?>">
        </div>
        <div class="text-dark">
            <label for="Observação">Observação</label>
            <input type="text" class="form-control" id="Observação" name="Observação" value="<?php echo $observacao; ?>">
        </div>
        <br>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        <br><br>
    
    </form>
    
    </div>

</body>



</html>