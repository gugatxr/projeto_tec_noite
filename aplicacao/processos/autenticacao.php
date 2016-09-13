<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <?php
      require_once '../classes/user.class.php';
      $validaLogin = new usuario();

      $senha = $_POST['senha'];
      $usuario = $_POST['usuario'];

      $resultadologin = $validaLogin->validaLogin($usuario, $senha);

      echo $resultadologin;
      ?>
  </body>
</html>
