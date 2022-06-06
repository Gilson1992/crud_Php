<?php

include 'conexao.php';


// Adicionando a função $_POST para fazer o Create
$placa = $_POST['Placa'];
$descricaoItem = $_POST['Descrição_Item'];
$preposto = $_POST['Preposto'];
$infrator = $_POST['Infrator'];
$local = $_POST['Local'];
$infracao = $_POST['Infração'];
$dataInfracao = $_POST['Data_infracao'];
$locadora = $_POST['Locadora'];
$valor = $_POST['Valor'];
$observacao = $_POST['Observação'];


// Adicionando os campos da Tabela para o INSERT
$create_cadastros = "INSERT INTO infracoes (Placa, Descrição_Item, Preposto,
 Infrator, Local, Infração, Data_Infracao, Locadora, Valor, Observação)

VALUES
(
    '$placa',
    '$descricaoItem',
    '$preposto',
    '$infrator',
    '$local',
    '$infracao',
    '$dataInfracao',
    '$locadora ',
    '$valor',
    '$observacao'
)";

// Validação da Query
$query_cadastros = mysqli_query($connx, $create_cadastros);

//Retorno após termino da inserção
header('location:index.php');
