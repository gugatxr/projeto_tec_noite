<?php
/*
*Será usado PDO para conexao para o banco de dados;
*/

//Corrige a codificação de caracteres para ISO ou UTF
ini_set('default_charset','utf-8');

$vServidor="127.0.0.1";
$vUsuario="root";
$vSenha="";
$vBaseDados="projeto_tec_noite";
$vSgbd = 'mysql';

//DSN é usado para conectar com PDO, é preciso informar qual tipo de SGBD irá usar, no caso se usará Mysql.
$vDsnComBase = "$vSgbd:dbname=$vBaseDados;host=$vServidor;charset=utf8";
$vDsnSemBase = "$vSgbd:host=$vServidor;charset=utf8";
?>
