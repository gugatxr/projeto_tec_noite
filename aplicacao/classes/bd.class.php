<?php
  require_once '../configuracoes/banco_dados.config.php';

  class bd extends PDO{

    function __CONSTRUCT($vDsn, $vUsuario, $vSenha){
      try{
        $teste = PDO::__CONSTRUCT($vDsn, $vUsuario, $vSenha);
      } catch (PDOException $erro){
        echo 'Conexão falhou: '. $erro->getMessage();
      }
    }

    function consulta($vQuery){
      $resultado = PDO:: query ($vQuery);
      if(!$resultado ){
        echo 'Erro na solicitação';
      }
    }
  }
  $bd = new bd($vDsnSemBase, $vUsuario, $vSenha);
  
