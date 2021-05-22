<html>

	<head>
		<title>Formulário de inclusão de receitas</title>
		<meta charset="UTF-8"/>	
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>


	<body>
		<h1>Formulário de inserção de registros de usuarios</h1>
		<form action="../Forms/processaTodosFormularios.php" method="POST">
		
			Nome de usuario: <input type="text" name="nome_usu" maxlength="40"> <br>
			Senha: 		<input type="password" name="senha" maxlength="12"> <br>
			Nome:		<input type="text" name="nome" maxlength="45"> <br>
			CPF:		<input type="text" name="cpf" maxlength="14"> <br>
			Tipo: 		<input type="text" name="tipo" maxlength="14"> <br>
			Email: 		<input type="text" name="email" maxlength="30"> <br>
			Sexo: 		<input type="text" name="sexo" maxlength="20"> <br>
			Telefone: 	<input type="text" name="telefone" maxlength="25"> <br>
			
			<input type="submit" value="Inserir usuario" name="acao"/> <br>
		
		</form>
		
		<h1>Formulário de inserção de registros de receitas</h1>
		<form action="../Forms/processaTodosFormularios.php" method="POST">

			Nome: 	  		<input type="text" name="nome_receita" maxlength="50"> <br>
			ingredientes: 	<input type="text" name="ingredientes" maxlength="2000"> <br>
			Dificuldade:	<input type="text" name="dificuldade" maxlength="30"> <br>
			Tempo:			<input type="text" name="nota" maxlength="10"> <br>
			Nota:			<input type="text" name="tempo" maxlength="15"> <br>
			
			<input type="submit" value="Inserir Receita" name="acao"/> <br>
		
		</form>

	</body>
</html>