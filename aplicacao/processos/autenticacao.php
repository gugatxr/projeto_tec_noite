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
      $resultadologin = $validaLogin->validaLogin();
      echo $resultadologin;
      require_once '../paginas/usuarios/usuarios.php';
    ?>
  </body>
</html>
