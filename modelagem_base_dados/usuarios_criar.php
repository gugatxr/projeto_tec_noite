<?php

//Corrige a codificação de caracteres para ISO ou UTF
ini_set('default_charset','utf-8');

//Conectar a base de dados a partir do arquivo de configurações
require('configuracoes.php');

$vConexao = mysqli_connect($vServidor, $vUsuario, $vSenha, $vBaseDados);
if (!$vConexao) {die('Problemas na conexão: ' . mysqli_connect_error());}

//Cria a tabela de dados
$vSql='CREATE TABLE usuarios '.
      '( '.
      'id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, '.
      'nome VARCHAR(40) NOT NULL, '.
      'senha VARCHAR(40) NOT NULL, '.
      'tipo INT(10) NOT NULL '.
      '); ';
$vResultado = mysqli_query($vConexao, $vSql);
echo('Tabela de dados criada com sucesso!');

?>
