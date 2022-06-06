<?php

//Configurações do Banco de Dados XAMPP
$host = 'localhost';
$user = 'root';
$passwd = '';
$bd_name = 'infracao_transito';

//Conectando o Banco de Dados
$connx = mysqli_connect($host, $user, $passwd, $bd_name);

// Testando o banco de Dados
// if($connx){
//     echo 'Conectou';

// }else {
//     echo 'erro';
// }
