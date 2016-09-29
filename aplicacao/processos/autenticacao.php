<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <?php
<<<<<<< HEAD
      require_once '../classes/bd.class.php';

      $vSenha = $_POST['senha'];
      $vUsuario = $_POST['usuario'];
      $vConsulta_sql = "SELECT nome , id_permissoes FROM imobiliaria.usuarios WHERE usuario = '$vUsuario' AND senha = '$vSenha' ";
=======
      require_once '../classes/user.class.php';
      $validaLogin = new usuario();

      $senha = $_POST['senha'];
      $usuario = $_POST['usuario'];
>>>>>>> classUser

      $resultadologin = $validaLogin->validaLogin($usuario, $senha);

      echo $resultadologin;
      ?>
  </body>
</html>
