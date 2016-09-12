<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  </head>
  <body>
    <?php
      require_once '../classes/bd.class.php';

      $vSenha = $_POST['senha'];
      $vUsuario = $_POST['usuario'];
      $vConsulta_sql = "SELECT nome , id_permissoes FROM imobiliaria.usuarios WHERE usuario = '$vUsuario' AND senha = '$vSenha' ";


      //Consulta no sql para validação de LogicException
      $vResultado_autenticacao = $bd->query($vConsulta_sql);
      $vNumero_registro = mysqli_num_rows($vResultado_autenticacao);
      $vDados_do_usuario = mysqli_fetch_array($vResultado_autenticacao);
      if ($vNumero_registro === 0) {
        echo "Usuário ou senha inválida. Tente novamente";
      }
      else {
      ?>
         <div style='
                position'>

              Login aceito <br>
              Bem Vindo  <?php echo $vDados_do_usuario['nome'] ?> <div>
      <?php }
      ?>



  </body>
</html>
