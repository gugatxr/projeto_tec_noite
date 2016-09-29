<?php
//Corrige caracteres especiais.
ini_set('default_charset' , 'utf-8');

require_once 'bd.class.php';
//classe da tabela Estado.
    class endereco extends conexaobd{
        private $descricaoEstado;
        private $descricaoCidade;
        private $descricaoBairro;
        private $tabelaEstado = 'estados';
        private $tabelaCidade = 'cidades';
        private $tabelaBairro = 'bairros';
        private $id_estado;
        private $id_cidade;

  function __construct(){
    parent::__construct();
  }


  public function setEndereco(){
    // $this->descricaoEstado = $_POST['descricaoEstado'];
    // $this->descricaoCidade = $_POST['descricaoCidade'];
    // $this->descricaoBairro = $_POST['descricaoBairro'];

    $this->descricaoEstado = 'parana';
    $this->descricaoCidade = 'poa';
    $this->descricaoBairro = 'bairro2';
    $this->id_estado = '3';
    $this->id_cidade = '';
  }
  //CRUD da tabela estados
  //Função para innserir Estados
  public function inserirEstado(){
    $this->setEndereco();
    $sql = "INSERT INTO $this->tabelaEstado (descricao)
              VALUES ('$this->descricaoEstado')";
    $resultado = parent::query($sql);
    var_dump($resultado);
    echo "$sql";
    return $resultado;
  }

  public function editarEstado(){
    $this->setEndereco();
    $id = 12;
    $sql = "UPDATE $this->tabelaEstado
              SET descricao='$this->descricaoEstado'
                  WHERE id=$id;";
    $resultado = parent::query($sql);
    return $resultado;
  }

  public function consultarEstado(){
    $sql = "SELECT * FROM $this->tabelaEstado
    WHERE descricao is not null";
    $resultado = parent::query($sql);
    while ($dados = $resultado->fetch_array()) {
      var_dump($dados);
    }
  }

  public function excluirEstado(){
    $id = 6;
    $sql = "DELETE FROM $this->tabelaEstado WHERE id=$id;";
    $resultado = parent::query($sql);
    return $resultado;
  }


  // funções para a tabela cidades
  public function inserirCidade(){
    $this->setEndereco();
    $sql = "INSERT INTO $this->tabelaCidade (descricao, id_estado)
                VALUES ('$this->descricaoCidade', '$this->id_estado' )";
    $resultado = parent::query($sql);
  }

  public function editarCidade(){
    $this->setEndereco();
    $id = '58';
    $sql = "UPDATE $this->tabelaCidade
              SET descricao='$this->descricaoCidade' , id_estado=$this->id_estado
                WHERE id=$id";
    $resultado = parent::query($sql);
    return $resultado;
  }
    public function excluirCidade(){
      $id = '58';
      $sql = "DELETE FROM $this->tabelaCidade WHERE id=$id";
      $resultado = parent::query($sql);
      return $resultado;
    }

    public function consultarCidade(){
      $sql = "SELECT * FROM $this->tabelaCidade
            WHERE descricao is not null";
      $resultado = parent::query($sql);
      while ($dados = $resultado->fetch_array()) {
      var_dump($dados);
      }
    }
}

$estado = new endereco();
$resultado = $estado->excluirCidade();
