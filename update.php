<?php

include 'conexao.php';

// Adicionando a função $_POST para fazer o Update
$id = $_POST['Id'];
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

// Adicionando os campos da Tabela para o Update
$update_cadastros = "UPDATE infracoes 

SET

Placa = '$placa',
Descrição_Item = '$descricaoItem',
Preposto = '$preposto',
Infrator = '$infrator',
Local = '$local',
Infração = '$infracao',
Data_infracao = '$dataInfracao',
Locadora = '$locadora ',
Valor = '$valor',
Observação = '$observacao'

WHERE Id = '$id' ";



// Validação da Query
$query_cadastros = mysqli_query($connx, $update_cadastros) or die(mysqli_error($connx));

//Retorno após termino da inserção
header('location:index.php');
