<?php
//Corrige caracteres especiais.
ini_set('default_charset' , 'utf-8');

require_once 'bd.class.php';
//classe da tabela Estado.
    class endereco extends conexaobd{
        private $descricaoEstado;
        private $descricaoCidade;
        private $descricaoBairro;
        private $tabela = 'estados';

  function __construct(){
    parent::__construct();
  }


  public function serEndereco(){
    // $this->descricaoEstado = $_POST['descricaoEstado'];
    // $this->descricaoCidade = $_POST['descricaoCidade'];
    // $this->descricaoBairro = $_POST['descricaoBairro'];

    $this->descricaoEstado = 'mato grosso';
    $this->descricaoCidade = '';
    $this->descricaoBairro = '';

  }
  //CRUD da tabela estados
  //Função para innserir Estados
  public function inserirEstado(){
    $sql = "INSERT INTO $this->tabela (descricao)
              VALUES ('$this->descricaoEstado')";
    $resultado = parent::query($sql);
    return $resultado;
  }

  public function editarEstado(){
    $id = 2;
    $sql = "UPDATE $this->tabela
              SET descricao='$this->descricaoEstado'
                  WHERE id=$id;";
    $resultado = parent::query($sql);
    echo "$sql";
    return $resultado;
  }

  public function excluirEstado(){
    $id = 2;
    $sql = "DELETE FROM $this->tabela WHERE id=$id;";
    $resultado = parent::query($sql);
    var_dump($resultado);
    echo "$sql";
    return $resultado;
  }

  public function consultarEstado(){
    $sql = "SELECT * FROM $this->tabela
              WHERE descricao is not null";
    $resultado = parent::query($sql);
    while ($dados = $resultado->fetch_array()) {
      var_dump($dados);
    }
    echo "$sql";
  }

  public function inserirCidade(){


  }
}

$estado = new endereco();
$resultado = $estado->consultarEstado();
