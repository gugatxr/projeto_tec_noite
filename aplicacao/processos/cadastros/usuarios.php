<?php
ini_set('default_charset' , 'utf-8');

require_once '../../classes/user.class.php';

$resultado = $usuario->inserirUsuario();

if ($resultado) {
  $resultado_cadastro = "inserido com sucesso!!!";
}
else {
  $resultado_cadastro ="ferro mano.";
}

require_once '../../paginas/usuarios/usuarios.php';
