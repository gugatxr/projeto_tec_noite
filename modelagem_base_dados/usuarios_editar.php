<?php

//Corrige a codificação de caracteres para ISO ou UTF
ini_set('default_charset','utf-8');

//Conectar a base de dados a partir do arquivo de configurações
require('configuracoes.php');

$vConexao = mysqli_connect($vServidor, $vUsuario, $vSenha, $vBaseDados);
if (!$vConexao) {die('Problemas na conexão: ' . mysqli_connect_error());}

//Inserir na tabela de dados
$vSql='UPDATE usuarios '.
      'SET nome="José Paulo dos Santos", senha="123456", tipo=2 '.
      'WHERE id=1 ';
$vResultado = mysqli_query($vConexao, $vSql);
echo('Registro editado com sucesso!');

?>
