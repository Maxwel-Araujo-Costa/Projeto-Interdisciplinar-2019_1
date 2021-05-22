<!DOCTYPE html>
<html>

	<head>
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
	
	
			<h1>Formulário de atualização e exclusão de usuarios</h1>
				<table class="table table-striped table-bordered table-hover">
				
					<thead>
	                    <tr>
	                      <th>id_usu Usuario</th>
            			  <th>nome_usu de Usuario</th>
            			  <th>Senha</th>
            			  <th>nome_usu</th>
            			  <th>CPF</th>
            			  <th>Tipo</th>
            			  <th>Email</th>
            			  <th>Sexo</th>
            			  <th>Telefone</th>
	                    </tr>
                  	</thead>
                  	
	                  
					<tbody>
                  		<?php 
							include '../BO/agendaBO.php';
							$resultado = consultarTodosRegistrosBOusuario();
								
							if($resultado->rowCount() > 0)
							{
								while($registroUsu = $resultado->fetch(PDO::FETCH_OBJ)) //http://php.net/manual/en/pdostatement.fetch.php
								{
									#Se clicou no botao atualizar, entao renderizar esta linha com inputtext para edicao
									if(isset($_GET['id_usuUsuParaAtualizar']) && $_GET['id_usuParaAtualizar'] == $registroUsu->id_usu) {
										echo "<tr>
	                      		 		
	                      				<form action=\"#\" method=\"GET\">
        								
                  						<td>" . $_GET['id_usuUsuParaAtualizar'] . 
                  						"<input type=\"hid_usuden\" name=\"id_usu\" value=" . $_GET['id_usuParaAtualizar'] . "> </td>
										
                  						<td><input type=\"text\" name=\"nome_usu\" value=\"" . $_GET['nome_usu'] . "\"> </td>
                                        <td><input type=\"text\" name=\"senha\" value=\"" . $_GET['senha'] . "\"> </td>
                                        <td><input type=\"text\" name=\"nome\" value=\"" . $_GET['nome'] . "\"> </td>
                                        <td><input type=\"text\" name=\"cpf\" value=\"" . $_GET['cpf'] . "\"> </td>
										<td><input type=\'text\' name=\"tipo\" value=\"" . $_GET['tipo'] . " \" \> </td>
                                        <td><input type=\"text\" name=\"email\" value=\"" . $_GET['email'] . "\"> </td>
										<td><input type=\'text\' name=\"sexo\" value=\"" . $_GET['sexo'] . " \" \> </td>
										<td><input type=\'text\' name=\"telefone\" value=\"" . $_GET['telefone'] . " \" \> </td>
										
										
										<td><input type=\"submit\" value=\"Atualizar\" name=\"acao\" class=\"btn btn-success\">
										
										<a href=\"formularioAtualizarEExcluir2.php?id_usuParaExcluir=$registroUsu->id_usu\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>

										</td> 
										
										</form>
										
										</tr>";
									} else {
										echo '<tr>';
										echo "<td> $registroUsu->id_usu </td>";
										echo "<td> $registroUsu->nome_usu </td>";
										echo "<td> $registroUsu->senha </td>";
										echo "<td> $registroUsu->nome </td>";
										echo "<td> $registroUsu->CPF </td>";
										echo "<td> $registroUsu->tipo </td>";
										echo "<td> $registroUsu->email </td>";
										echo "<td> $registroUsu->sexo </td>";
										echo "<td> $registroUsu->telefone </td>";
										
										//Adicionando os dois botoes: Editar e Excluir
										echo "<td>
										<a href=\"formularioAtualizarEExcluir.php?idParaAtualizarUsu=$registroUsu->id_usu&nome_usu=$registroUsu->nome_usu&senha=$registroUsu->senha&nome=$registroUsu->nome&cpf=$registroUsu->CPF&tipo=$registroUsu->tipo&email=$registroUsu->email&sexo=$registroUsu->sexo&telefone=$registroUsu->telefone\" class=\"btn btn-success\">
										<span class=\"glyphicon glyphicon-edit\"></span>
										Editar
										</a>
											
										<a href=\"formularioAtualizarEExcluir2.php?id_usuParaExcluir=$registroUsu->id_usu\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>
											
											
										</td>";
											
										echo '</tr>';
									}
									
								
								}
									
							} else {
								echo '<tr>';
								echo '<td> Não há registroUsus no banco</td>';
								echo '<td> Não há registroUsus no banco</td>';
								echo '<td> Não há registroUsus no banco</td>';
								echo '<td> Não há registroUsus no banco</td>';
								echo '</tr>';
							}
							
							
						?>
                	</tbody>
	            </table>
		
		<a href="../index.php">Voltar para a página principal </a>
		
			<?php 
    			if (isset($_GET['acao']) && $_GET['acao'] == 'Atualizar Usuario') {
    			    atualizarRegistroBOusuario($_GET['id_usu'], $_GET['nome_usu'], $_GET['senha'], $_GET['nome'], $_GET['cpf'], $_GET['tipo'], $_GET['email'], $_GET['sexo'], $_GET['telefone']);
    			    header('Location:./formularioAtualizarEExcluir2.php');
    			}
    			
    			if (isset($_GET['idParaExcluirUsuario'])) {
    			    excluirRegistrosPorIDBOusuario($_GET['idParaExcluirUsuario']);
    			    header('Location:./formularioAtualizarEExcluir2.php');
    			}
				
			?>
			
			<h1>Formulário de atualização e exclusão de registros de receitas</h1>
	<table class="table table-striped table-bordered table-hover">

		<thead>  
			<tr>
				<th>id_receita</th>
				<th>nome_receita</th>
				<th>ingredientes</th>
				<th>dificuldade</th>
				<th>tempo</th>
				<th>nota</th>
			</tr>
		</thead>


		<tbody>
                  		<?php
                    $resultadoRec = consultarTodosRegistrosBOreceitas();

                    if ($resultadoRec->rowCount() > 0) {
                        while ($registroRec = $resultadoRec->fetch(PDO::FETCH_OBJ)) // http://php.net/manual/en/pdostatement.fetch.php
                        {
                            // Se clicou no botao atualizar, entao renderizar esta linha com inputtext para edicao
                            if (isset($_GET['idParaAtualizarRec']) && $_GET['idParaAtualizarRec'] == $registroRec->id_receita) {
                                echo "<tr>
	                      		 		
	                      				<form action=\"#\" method=\"GET\">
        								
                  						<td>" . $_GET['idParaAtualizarRec'] . "<input type=\"hidden\" name=\"id_receita\" value=" . $_GET['idParaAtualizarRec'] . "> </td>
										
                                        <td><input type=\"text\" name=\"nome\" value=\"" . $_GET['nome_receita'] . "\"> </td>
                                        <td><input type=\"text\" name=\"ingredientes\" value=\"" . $_GET['Ingredientes'] . "\"> </td>
                                        <td><input type=\"text\" name=\"dificuldade\" value=\"" . $_GET['dificuldade'] . "\"> </td>
                                        <td><input type=\"text\" name=\"tempo\" value=\"" . $_GET['tempo'] . "\"> </td>
                                        <td><input type=\"text\" name=\"nota\" value=\"" . $_GET['nota'] . "\"> </td>
										
										<td><input type=\"submit\" value=\"Atualizar Receita\" name=\"acao\" class=\"btn btn-success\">
										
										<a href=\"formularioAtualizarEExcluir.php?idParaExcluirReceita=$registroRec->id_receita\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>

										</td> 
										
										</form>
										
										</tr>";
                            } else {
                                echo '<tr>';
                                echo "<td> $registroRec->id_receita </td>";
                                echo "<td> $registroRec->nome_receita </td>";
                                echo "<td> $registroRec->Ingredientes</td>";
                                echo "<td> $registroRec->dificuldade </td>";
                                echo "<td> $registroRec->tempo </td>";
                                echo "<td> $registroRec->nota </td>";

                                // Adicionando os dois botoes: Editar e Excluir
                                echo "<td>
										<a href=\"formularioAtualizarEExcluir.php?idParaAtualizarREC=$registroRec->id_receita&nome_receita=$registroRec->nome_receita&Ingredientes=$registroRec->Ingredientes&dificuldade=$registroRec->dificuldade&tempo=$registroRec->tempo&nota=$registroRec->nota\" class=\"btn btn-success\">
										<span class=\"glyphicon glyphicon-edit\"></span>
										Editar
										</a>
											
										<a href=\"formularioAtualizarEExcluir.php?idParaExcluirMoeda=$registroRec->id_receita\" class=\"btn btn-danger\">
										<span class=\"glyphicon glyphicon-remove\"></span>
										Excluir
										</a>
											
											
										</td>";

                                echo '</tr>';
                            }
                        }
                    } else {
                        echo '<tr>';
                        echo '<td> Não há registros no banco</td>';
                        echo '<td> Não há registros no banco</td>';
                        echo '<td> Não há registros no banco</td>';
                        echo '<td> Não há registros no banco</td>';
                        echo '</tr>';
                    }

                    ?>
                	</tbody>
	</table>

	<a href="../index.php">Voltar para a página principal </a>
		
			<?php
                if (isset($_GET['acao']) && $_GET['acao'] == 'Atualizar Receita') {
                    atualizarRegistroBOmoeda($_GET['id_receita'], $_GET['nome_receita'], $_GET['Ingredientes'], $_GET['dificuldade'], $_GET['tempo'], $_GET['nota']);
                    header('Location:./formularioAtualizarEExcluir2.php');
                }
                
                if (isset($_GET['idParaExcluirUsuario'])) {
                    excluirRegistrosPorIDBOmoeda($_GET['idParaExcluirRecceita']);
                    header('Location:./formularioAtualizarEExcluir2.php');
                }  
            ?>
	</body>
</html>
