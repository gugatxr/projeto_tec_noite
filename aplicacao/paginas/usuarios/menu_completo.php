<html>
<head>
<title>SGD Imóveis</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="css/estilo.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script language="JavaScript" type="text/javascript">
$(function() {
	// Evento de clique do elemento: ul#menu li.parent > a
	$('ul#menu li.parent > a').click(function() {
	// Expande ou retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
	$('ul.sub-menu', $(this).parent()).slideToggle('fast', function() {
		// Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado       
		$(this).parent().toggleClass('aberto');
		});
                return false;
	});
});
</script>

</head>

<style>
    /*Define os cantos arredondados da tabela*/      
    table.rounded-corners {
	border-radius: 10px;
	}      
    table.rounded-corners tr:first-child td:first-child {
	border-top-left-radius: 10px;
        border:0px solid green;
	bgcolor: white;
	padding:3px 7px 2px 7px;
        }
    table.rounded-corners tr:first-child td:last-child {
	border-top-right-radius: 10px;
        border:0px solid green;
	bgcolor: white;
	padding:3px 7px 2px 7px;
	}
    table.rounded-corners tr:last-child td:first-child {
	border-bottom-left-radius: 10px;
        border:0px solid green;
	bgcolor: white;
	padding:3px 7px 2px 7px;
        }
    table.rounded-corners tr:last-child td:last-child {
	border-bottom-right-radius: 10px;
        border:0px solid green;
	bgcolor: white;
	padding:3px 7px 2px 7px;
    }
</style>

    <body style="margin-top: 2px; margin-bottom: 2px; margin-left: 2px;	margin-right: 2px; height: 100%; ">

     <!-- Criar menu dinâmico-->
     <table class="rounded-corners" style="height: 99%;" width="192" border="0" cellspacing="0" cellpadding="0" marginheight="0" marginwidth="0">
     <tr>        
        <td align="center" bgcolor="#c9f9c4" valign="top">

        <!-- Criar ítens do menu dinâmico-->           
        <ul id="menu" style="text-align:left; font-size: 11px;">                                 
     	    <li class="header">INÍCIO</li>                    
	    <li><a href="conteudo.php" target="conteudo" title="Página inicial do ambiente">Página Inicial</a></li>
	    <li><a href="login_consultar.php" target="conteudo" title="Faça contato conosco">Login</a></li>
        </ul>

        <ul id="menu" style="text-align:left; font-size: 11px;">                                 
  	    <li class="header">CADASTROS</li>                    
            <li><a href="criar_base.php" target="conteudo" title="Consultar registros existentes">Criar Base de Dados</a></li>
	    <li class="parent"><a href="">Usuários</a>
	   	    <ul class="sub-menu">                                   
			    <li><a href="usuarios_criar_tabela.php" target="conteudo" title="Consultar registros existentes">Criar Tabela</a></li>
			    <li><a href="usuarios_consultar.php" target="conteudo" title="Consultar registros existentes">Consultar Registros</a></li>
		    </ul>
	    </li>      
	    <li class="parent"><a href="">Imóveis</a>
	   	    <ul class="sub-menu">                                   
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Criar Tabela</a></li>
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Consultar Registros</a></li>
		    </ul>
	    </li>      
	    <li class="parent"><a href="">Pessoas</a>
	   	    <ul class="sub-menu">                                   
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Criar Tabela</a></li>
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Consultar Registros</a></li>
		    </ul>
	    </li>      
	    <li class="parent"><a href="">Caixa</a>
	   	    <ul class="sub-menu">                                   
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Criar Tabela</a></li>
			    <li><a href="desenvolvimento.php" target="conteudo" title="Consultar registros existentes">Consultar Registros</a></li>
		    </ul>
	    </li>      
        </ul>
            
        <ul id="menu" style="text-align:left; font-size: 11px;">                                 
  	    <li class="header">EXTRAS</li>                    
	    <li class="parent"><a href="">Portais</a>
	   	    <ul class="sub-menu">                                   
                            <li><a href="http://www.senacrs.com.br/tramandai" target="_blank" title="Atalho para o SENAC Tramandaí">SENAC</a></li>
                            <li><a href="http://www.google.com.br" target="_blank" title="Atalho para o Google">Google</a></li>
                            <li><a href="http://www.gmail.com.br" target="_blank" title="Atalho para o Gmail">Gmail</a></li>
                            <li><a href="http://www.ig.com.br" target="_blank" title="Atalho para o iG Mail">iG Mail</a></li>
                            <li><a href="http://www.facebook.com.br" target="_blank" title="Atalho para o GMail">Facebook</a></li>
                            <li><a href="http://www.linkedin.com.br" target="_blank" title="Atalho para o Linkedin">Linkedin</a></li>
                            <li><a href="http://www.twitter.com.br" target="_blank" title="Atalho para o Twitter">Twitter</a></li>
                    </ul>
	    <li class="parent"><a href="">Mídias</a>
	   	    <ul class="sub-menu">                                   
                    <li><a href="http://zerohora.clicrbs.com.br/rs/" target="_blank" title="Atalho para a Zero Hora">Zero Hora</a></li>
                    <li><a href="http://gaucha.clicrbs.com.br/rs/" target="_blank" title="Atalho para a Rádio Gaúcha">Rádio Gaúcha</a></li>
                    <li><a href="http://www.radioosorio.com.br" target="_blank" title="Atalho para a Rádio Osório">Rádio Osório</a></li>
                    </ul>
	    <li><a href="http://localhost/phpmyadmin" target="conteudo" title="Atalho para o phpMyAdmin">phpMyAdmin</a></li>
            </li>
        </ul>

        <ul id="menu" style="text-align:left;font-size: 11px;">                                 
  	    <li class="header">CRÉDITOS</li>                    
	    <li><a href="desenvolvimento.php" target="mainFrame" title="Desenvolvedor do sistema">Desenvolvedor</a></li>
	    <li><a href="desenvolvimento.php" target="mainFrame" title="Tenologia utilizada">Tecnologia</a></li>
        </ul>

       </td>
    </tr>
    </table>
    </body>
</html>
