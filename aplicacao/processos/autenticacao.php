<?php
  require_once '../classes/bd.class.php';

  $vSenha = $_POST['senha'];
  $vUsuario = $_POST['usuario'];

  //Consulta sql para validar o login.
    $resultado = $bd->query("SELECT usuario, id_permissoes
      FROM imobiliaria.usuarios WHERE usuario = '$vUsuario' AND senha = '$vSenha'");
  //@var int resultado
  //rowCount retorna o numero de linhas do resultado da consulta
    $numero_usuarios = $resultado->rowCount();
  // se retornar 1 linha para ser valido
  // para 0 não ha registro no banco de Dados
  //se retornar mais de 1 precisa ser revisado o banco de dados
  if($numero_usuarios === 1)
  {
    echo "Logado com sucesso!";
    if(session_id() == '' || !isset($_SESSION))
    {
      // session isn't started
      $nome_usuario = $resultado->fetch(PDO::FETCH_ASSOC);
      $nome_usuario = $nome_usuario['usuario'];
      session_start();
      $_SESSION["$nome_usuario"] = $nome_usuario;
    }
  }elseif($numero_usuarios === 0)
  {
    echo "Dados incorretos";
  }
  echo $_SESSION['admin'];
