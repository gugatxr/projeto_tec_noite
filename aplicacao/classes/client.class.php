<?php
ini_set('default_charset' , 'utf-8');

require_once 'bd.class.php';

class clientes extends conexaobd{
    private $nome;
    private $cpf_cnpj;
    private $endereco;
    private $logradouro;
    private $tipoLogradouro;
    private $numero;
    private $complemento;
    private $id_bairro;
    private $id_cidade;
    private $cep;
    private $email;
    private $dt_nascimento;
    private $tabela ="clientes";

  function __construct(){
    parent::__construct();
  }

  public function setClientes(){
    // $this->nome = $_POST['nomeCliente'];
    // $this->cpf_cnpj = $_POST['cpf_cnpj'];
    // $this->endereco = $_POST['endereco'];
    // $this->logradouro = $_POST['logradouro'];
    // $this->tipoLogradouro = $_POST['tipoLogradouro'];
    // $this->numero = $_POST['numero'];
    // $this->complemento = $_POST['complemento'];
    // $this->id_bairro = $_POST['id_bairro'];
    // $this->id_cidade = $_POST['id_cidade'];
    // $this->cep = $_POST['cep'];
    // $this->email = $_POST['email'];
    // $this->dt_nascimento = $_POST['nascimento'];

    $this->nome = "gabrielll";
    $this->cpf_cnpj = "03734840031";
    $this->logradouro = "aaaa";
    $this->tipoLogradouro = 2;
    $this->numero = "4321";
    $this->complemento = "casaa";
    $this->id_bairro = 2;
    $this->id_cidade = 2;
    $this->cep = '231231';
    $this->email = "gab@asgab.com";
    $this->dt_nascimento = "1995-11-23";
  }
  public function inserirCliente(){
    $this->setClientes();
    $sql="INSERT INTO $this->tabela
          (nome, cpf_cnpj, id_tipo_logradouros, logradouro, numero, complemento, id_bairro, id_cidade, cep, email, dt_nascimento)
            VALUES
          ('$this->nome', '$this->cpf_cnpj', $this->tipoLogradouro, '$this->logradouro',
                    '$this->numero', '$this->complemento', $this->id_bairro, $this->id_cidade, '$this->cep', '$this->email', '$this->dt_nascimento');";
    $resultado=parent::query($sql);
    echo "$sql";
    var_dump($resultado);
    return $resultado;
  }
  public function editarCliente(){
    $this->setClientes();
    $id=8;
    $sql="UPDATE $this->tabela SET
          nome='$this->nome',
          cpf_cnpj='$this->cpf_cnpj',
          logradouro='$this->logradouro',
          id_tipo_logradouros=$this->tipoLogradouro,
          numero='$this->numero',
          complemento='$this->complemento',
          id_bairro=$this->id_bairro,
          id_cidade=$this->id_cidade,
          cep='$this->cep',
          email='$this->email',
          dt_nascimento='$this->dt_nascimento'
          WHERE id=$id;";
    $resultado=parent::query($sql);
    echo "$sql";
    var_dump($resultado);
    return $resultado;
  }

}
$clientes = new clientes();
$resultado = $clientes->editarCliente();
