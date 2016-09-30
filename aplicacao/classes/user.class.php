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
