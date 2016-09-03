<html>
<!-- Iniciar página com título e UTF-8 -->
  <head>
   <title>Consultar Usuários</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body bgcolor="white">

<?php
//Conectar a base de dados a partir do arquivo de configurações
require('configuracoes.php');
$vConexao = mysqli_connect($vServidor, $vUsuario, $vSenha, $vBaseDados);
if (!$vConexao) {die('Problemas na conexão: ' . mysqli_connect_error());}
echo('ok');
//Consultar a tabela de dados
$vSql='SELECT id, nome, senha, tipo '.
      'FROM usuarios';
$vResultado=mysqli_query($vConexao, $vSql);
$vRegistros=mysqli_num_rows($vResultado);
?>

<!-- Iniciar tabela -->
<table border="1">
     <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Senha</th>
      <th>Tipo</th>
     </tr>

<?php
//Exibir dados
echo('Registros: '.$vRegistros.'</br></br>');
while($vCampo=mysqli_fetch_array($vResultado)) 
     {
      echo('<tr>');
      echo('<td>'.
           utf8_encode($vCampo['id']).'<td>'.
           utf8_encode($vCampo['nome']).'<td>'.
           utf8_encode($vCampo['senha']).'<td>'.
           utf8_encode($vCampo['tipo']).'</td>');
      echo('</tr>');
     };


//Fechar conexão
mysqli_close($vConexao);
?>

<!-- Finalizar tabela e página -->
   </table>
  </body>
</html>
