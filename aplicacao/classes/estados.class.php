<?php
//Corrige caracteres especiais.
ini_set('default_charset' , 'utf-8');

require_once 'bd.class.php';
//classe da tabela Estado.
    class estado extends conexaobd{
        //private $descricao = $_POST['descricao'];
        private $descricao = 'São Paulo';
        private $tabela = 'estado'


  function __construct()
  {
    parent::__construct();
  }
  public function inserirEstado(){
    $sql = "INSERT INTO $this->tabela (descricao)
              VALUES  ('$descricao')";
    echo "$sql";
    $resultado = parent::query($sql);
    return $resultado;
  }
}

 ?>
