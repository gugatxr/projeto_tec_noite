<html>
	<head>
		<link = rel = "stylesheet" href = "../../css/style.css">
	</head>
	<body>
		<form class = "box-cadastro" action = "../../processos/cadastros/usuarios.php" method = "POST">
			<?php if (isset($resultado_cadastro)) {
				echo $resultado_cadastro;
			} ?><br>
				nome
				<input type = "text" name = "nome"><br>
				usuarios
				<input type = "text" name = "usuario"><br>
				email
				<input type = "email" name = "email"><br>
				senha
				<input type = "password" name = "senha"><br>
					<select name ="id_permissoes">
						<option value ="1">
							administrador
						</option>
					</select><br>
			<button> Salvar</button>
		</form>
	</body>
</html>
