<?php


class clentes extends conexaobd{
    private $nome;
    private $nascimento;
    private $endereco;
    private $cpf_cnpj;
    private $logradouro;
    private $numero;
    private $complemento;
    private $id_bairro;
    private $id_cidade;
    private $email;

  function __construct(argument)
  {
    parent::__construct();
  }

  public function setclentes(){
    $this->$nome = $_POST['nomeCliente'];
    $this->nascimento = $_POST['nascimento'];
    $this->endereco = $_POST['endereco'];
    $this->cpf_cnpj = $_POST['cpf_cnpj'];
    $this->logradouro = $_POST['logradouro'];
    $this->numero = $_POST['numero'];
    $this->complemento = $_POST['complemento'];
    $this->id_cidade = $_POST['id_cidade'];
    $this->email = $_POST['email'];
  }
  public function inserirCliente()
  {
    # code...
  }
}
