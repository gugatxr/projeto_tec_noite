<?php
//Corrige caracteres especiais.
ini_set('default_charset' , 'utf-8');

//classe de conexão com o banco de dados
      class conexaobd {

        private $vServidor = 'localhost';
        private $vDatabase = 'imobiliaria';
        private $vUsuario = 'root';
        private $vSenha = '1234';
        private $vConexao;

        function __construct(){
          $this->conecta();
        }

        function conecta(){
          $this->vConexao = mysqli_connect($this->vServidor, $this->vUsuario, $this->vSenha, $this->vDatabase)
            or die("Erro ao conectar ao servidor; " . mysql_error());
        }
        function query($vSql){
          $vResultado = mysqli_query($this->vConexao, $vSql);
          return $vResultado;
        }
      }
      $bd = new conexaobd();
?>
