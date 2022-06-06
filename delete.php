<?php

include 'conexao.php';

// Adicionando a função $_POST para fazer o Create
$id = $_GET['id'];

// Adicionando os campos da Tabela para o INSERT
$delete_cadastros = "DELETE FROM infracoes WHERE Id = '$id'"; 

// Validação da Query
$query_cadastros = mysqli_query($connx, $delete_cadastros) or die(mysqli_error($connx));

//Retorno após termino da inserção
header('location:index.php');
