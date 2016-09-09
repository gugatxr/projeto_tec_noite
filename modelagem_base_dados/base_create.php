<?php
  require_once '../class/bd.class.php';

  $vSql = 'CREATE DATABASE imobiliaria';
  $vResultado = mysqli_query($vConexao, $vSql);
  echo('Base de dados criada com sucesso!');
?>
