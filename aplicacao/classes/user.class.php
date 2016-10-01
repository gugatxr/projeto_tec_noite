<?php
// Classe Usuário com as funções
// Validação de Login
// CRUD - criar, consultar, atalizar, excluir usuarios do sistema


//Corrige caracteres especiais.
ini_set('default_charset' , 'utf-8');

//Classe de usuários do sistema.
require_once 'bd.class.php';

    class usuario extends conexaobd {
        private $nome;
        private $usuario;
        private $senha;
        private $email;
        private $id_permissoes;
        private $id;
        private $tabela = 'usuarios';

  function __construct() {

    parent::__construct();
  }

  public function setUsuario(){
    $this->nome = $_POST['nome'];
    $this->usuario = $_POST['usuario'];
    $this->senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    $this->email = $_POST['email'];
    $this->id_permissoes = $_POST['id_permissoes'];

    // $this->nome = 'gaba';
    // $this->usuario = 'gaba';
    // $this->senha  = '12';
    // $this->email  = 'g@g.coms';
    // $this->id_permissoes  = '1';

  }

  /* função para validar login
  * usuario string
  * resultado_verificacao_senha hash senha
  */
  public function validaLogin(){
    //recebe variaveis do formulario via post
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //consulta que retorna a senha do banco para verificar com a senha digitada
    $selectSql = "SELECT senha
                      FROM imobiliaria.usuarios
                      WHERE usuario = '$usuario' OR email = '$usuario'  ";
    //envia query para o banco de dados
    $vResultado_autenticacao = parent::query($selectSql);
    //trata o resultado com array associativo. $senha_usuario['senha']
    $senha_usuario = mysqli_fetch_assoc($vResultado_autenticacao);
    // password_verify retorna TRUE ou FALSE verificando a hash armazenada no banco.
    // $senha string via Post
    // $senha_usuario['senha'] hash da senha armazenada
    $resultado_verificacao_senha = password_verify($senha, $senha_usuario['senha']);

    if ($resultado_verificacao_senha === FALSE) {
      $resultado =  "Usuário ou senha inválida. Tente novamente";
    }
    elseif($resultado_verificacao_senha === TRUE) {

      $resultado = 'Login aceito <br>
      Bem Vindo '; //$vDados_do_usuario['nome'];
    }
      return $resultado;
  }
  //funções CRUD
  //Função  para inserir Usuário

  public function inserirUsuario(){
    $this->setUsuario();
    $sql = "INSERT INTO $this->tabela (nome, usuario, senha, email, id_permissoes)
              values ('$this->nome', '$this->usuario', '$this->senha', '$this->email', $this->id_permissoes)";
    $resultado = parent::query($sql);
    return $resultado;
  }

  //Função para Excluir Usuário
  public function excluirUsuario(){
    $id = 6;
    $sql = "DELETE FROM $this->tabela WHERE id=$id;";
    $resultado = parent::query($sql);

    return $resultado;
  }

  //Função para Consultar Usuário
  public function consultarUsuario(){
    $sql = "SELECT * FROM $this->tabela WHERE nome is not null";
    $resultado = parent::query($sql);
    while ($dados = $resultado->fetch_array()) {
      var_dump($dados);
    }
    return $resultado;

  }

  //Função para Editar Usuários
  public function editarUsuario(){

      $this->setUsuario();
      $sql = "UPDATE usuarios
                  SET nome='$this->nome', usuario='$this->usuario', email='$this->email', senha='$this->senha', id_permissoes=$this->id_permissoes
                      where id=6";
      $resultado = parent::query($sql);
      var_dump($resultado);
      echo "$sql";
      return $resultado;
    }

}
$usuario = new usuario();
