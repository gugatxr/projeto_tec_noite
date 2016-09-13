<?php
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
  public function insere($nome, $usuario, $senha, $id_permissoes, $email){
    $armazenaSql = "INSERT INTO $this->tabela (nome, usuario, senha, id_permissoes, email)
            values ('$nome', '$usuario', '$senha', $id_permissoes, '$email')";
            echo "$armazenaSql";
    $resultado = conexaobd::query($armazenaSql);
    return $resultado;
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
  public function inserirUsuario(){
    // $nome = $_POST['nome'];
    // $usuario = $_POST['usuario'];
    // $senha = $_POST['senha'];
    // $email = $_POST['email'];
    // $id_permissoes = $_POST['id_permissoes'];
    $nome = 'gustavo';
    $usuario = 'gus';
    $senha = '12345';
    $email = 'gus@gus.com';
    $id_permissoes = '1';

    $sql = "INSERT INTO (nome, usuario, senha, email, id_permissoes)
              values ('$nome', '$usuario', '$senha', '$email', $id_permissoes)";
    $resultado = parent::query($sql);
    return $resultado;
  }
}
$usuario = new usuario();
