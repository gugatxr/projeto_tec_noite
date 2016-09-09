<!DOCTYPE html>
<html lang="pt" >
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" media="screen" title="no title">
	</head>

		<body class="container">

			<form class="box-login" action="autenticacao.php" method="POST">
					<h1 style="font-style: italic;"> Login</h1><p>
			<label for="usuario">Usuário</label>

			<input type="text" placeholder="Usuário" required="required" /><p>

			<label for="senha">Senha</label>

			<input type="password" placeholder="Senha" required="required" minlength="5"/>
				  <label><p>
				<button type="submit">Acessar</button><br><br>
			</form>

		</body>
</html>
