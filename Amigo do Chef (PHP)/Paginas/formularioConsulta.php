<!DOCTYPE html>
<html>

<head>
	<title>Formulário de consulta</title>
	<meta charset="UTF-8" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script
    	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script
    	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
	<h1>Formulário de consulta de usuarios</h1>
	<form action="../Forms/processaTodosFormularios.php" method="POST">
	
		ID: <input type="text" name="id_usu"/>

		
		<input type="submit" value="Consultar Usuario" name="acao" /> <br>

	</form>
	
	<h1>Formulário de consulta de Receitas</h1>
	<form action="../Forms/processaTodosFormularios.php" method="POST">
	
		ID: <input type="text" name="id_receita"/>

		
		<input type="submit" value="Consultar Receita" name="acao" /> <br>

	</form>
</body>
</html>