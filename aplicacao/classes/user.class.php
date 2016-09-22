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
        private $tabela = 'usuarios';

  function __construct() {

    parent::__construct();
  }

  //Funcão de inserir usuario no banco.
  // $nome, $usuario, $senha, $email - string
 // $id_permissao - int
  // public function insere($nome, $usuario, $senha, $id_permissoes, $email){
  //           echo "$armazenaSql";
  //   $armazenaSql = "INSERT INTO $this->tabela (nome, usuario, senha, id_permissoes, email)
  //           values ('$nome', '$usuario', '$senha', $id_permissoes, '$email')";
  //   $resultado = conexaobd::query($armazenaSql);
  //   return $resultado;
  }

  // função para validar login
  public function validaLogin($usuario, $senha){
    $selectSql = "SELECT nome , id_permissoes
                      FROM imobiliaria.usuarios
                      WHERE usuario = '$usuario' AND senha = '$senha' ";

    $vResultado_autenticacao = parent::query($selectSql);
    $vNumero_registro = mysqli_num_rows($vResultado_autenticacao);
    $vDados_do_usuario = mysqli_fetch_array($vResultado_autenticacao);
    if ($vNumero_registro === 0) {
      $resultado =  "Usuário ou senha inválida. Tente novamente";
    }
    else {
      $resultado = 'Login aceito <br>
      Bem Vindo ' . $vDados_do_usuario['nome'];

    }
      return $resultado;
  }
  //funções CRUD
  //Função  para inserir Usuário

  public function inserirUsuario(){
    // $nome = $_POST['nome'];
    // $usuario = $_POST['usuario'];
    // $senha = $_POST['senha'];
    // $email = $_POST['email'];
    // $id_permissoes = $_POST['id_permissoes'];
    $nome = 'gustavoooo';
    $usuario = 'gus';
    $senha = '1234567';
    $email = 'gus@gus.com';
    $id_permissoes = '1';

    $sql = "INSERT INTO $this->tabela (nome, usuario, senha, email, id_permissoes)
              values ('$nome', '$usuario', '$senha', '$email', $id_permissoes)";
    $resultado = parent::query($sql);
    return $resultado;
  }

  //Função para Excluir Usuário
  public function excluirUsuario(){

    $id = 2;

    $sql = "DELETE FROM $this->tabela WHERE id='. $id';";
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

  //Função para Editar Usuário
  public function editarUsuario(){
      // $nome = $_POST['nome'];
      // $usuario = $_POST['usuario'];
      // $senha = $_POST['senha'];
      // $email = $_POST['email'];
      // $id_permissoes = $_POST['id_permissoes'];
      $nome = 'joaosadas';
      $usuario = 'josss';
      $senha = '13242';
      $email = 'j@j.com';
      $id_permissoes = '1';

      $sql = "UPDATE usuarios
                  SET nome='$nome', usuario='$usuario', email='$email', senha='$senha', id_permissoes=$id_permissoes
                      where id=13";
      $resultado = parent::query($sql);
      var_dump($resultado);
      echo "$sql";
      return $resultado;
    }

}
//$usuario = new usuario();
//$resultado = $usuario->consultarUsuario();
