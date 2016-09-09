<?php
  require_once '../classes/bd.class.php';

  $vSenha = $_POST['senha'];
  $vUsuario = $_POST['usuario'];

  //Consulta sql para validar o login.
    $resultado = $bd->query("SELECT nome, id_permissoes FROM imobiliaria.usuarios WHERE usuario = '$vUsuario' AND senha = '$vSenha' ");
  //@var int resultado
  //rowCount retorna o numero de linhas do resultado da consulta
    $resultado = $resultado->rowCount();
  // se retornar 1 linha para ser valido
  // para 0 não ha registro no banco de Dados
  //se retornar mais de 1 precisa ser revisado o banco de dados
  if($resultado === 1)
  {
    echo "Logado com sucesso!";

  }elseif($resultado === 0)
  {
    echo "Dados incorretos";
    // if(session_id() == '' || !isset($_SESSION))
    // {
    //   // session isn't started
    //   session_start();
    // }
  }
