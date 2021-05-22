<?php

	include '../BO/agendaBO.php';
	
	if($_POST["acao"] == "Inserir usuario") {
	    
	    if(!empty($_POST["nome_usu"]) &&
	        !empty($_POST["senha"]) &&
	        !empty($_POST["nome"]) &&
	        !empty($_POST["cpf"]) &&
	        !empty($_POST["tipo"]) &&
	        !empty($_POST["email"]) &&
	        !empty($_POST["sexo"]) &&
	        !empty($_POST["telefone"])){
	            
	            $nome_usu = $_POST["nome_usu"];
	            $senha = $_POST["senha"];
	            $nome = $_POST["nome"];
	            $cpf = $_POST["cpf"];
	            $tipo = $_POST["tipo"];
	            $email = $_POST["email"];
	            $sexo = $_POST["sexo"];
	            $telefone = $_POST["telefone"];
	            
	            inserirBOusuario($nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone);
	            
	            header('Location:../index.php');
	            
	    } else {
	        echo "<script> window.alert(\"Você deve preencher todos os campos\") </script>";
	        echo "<script> window.history.back(); </script>";
	    }
	    
	}
	
	if($_POST["acao"] == "Inserir Receita") {
	    
	    if(!empty($_POST["nome_receita"]) &&
	        !empty($_POST["ingredientes"]) &&
	        !empty($_POST["dificuldade"]) &&
	        !empty($_POST["tempo"]) &&
	        !empty($_POST["nota"])){
	            
	            $nome_receita = $_POST["nome_receita"];
	            $ingredientes = $_POST["ingredientes"];
	            $dificuldade = $_POST["dificuldade"];
	            $tempo = $_POST["tempo"];
	            $nota = $_POST["nota"];
	            
	            inserirBOreceitas($nome_receita, $ingredientes, $dificuldade, $tempo, $nota);
	            
	            header('Location:../index.php');
	            
	    } else {
	        echo "<script> window.alert(\"Você deve preencher todos os campos\") </script>";
	        echo "<script> window.history.back(); </script>";
	    }
	    
	}
	
	
	
	if($_POST["acao"] == "Consultar Usuario") {
	    
	    $id_usu = $_POST['id_usu'];
	    
	    if(!empty($id_usu)) {
	        $resultadoUsu = consultarRegistrosPorIDBOusuario($id_usu);
	        
	        if($resultadoUsu->rowCount() == 1) {
	            
	            //fetch(PDO::FETCH_OBJ)  retorna um objeto anonimo com nomes de propriedades
	            //que correspondem aos nomes das colunas da tabela no banco
	            $registroUsu = $resultadoUsu->fetch(PDO::FETCH_OBJ);
	            
	            echo "ID: " . $registroUsu->id_usu . "<br>";
	            echo "Nome de Usuario: " . $registroUsu->nome_usu . "<br>";
	            echo "Senha: " . $registroUsu->senha . "<br>";
	            echo "Nome: " . $registroUsu->nome . "<br>";
	            echo "CPF: " . $registroUsu->CPF . "<br>";
	            echo "Tipo de Usuario: " . $registroUsu->tipo . "<br>";
	            echo "Email: " . $registroUsu->email . "<br>";
	            echo "Sexo: " . $registroUsu->sexo . "<br>";
	            echo "Telefone: " . $registroUsu->telefone . "<br><p/>";
	        } else {
	            echo "Não há registro com ID=$id_usu<br>";
	            echo "<a href=\"../Paginas/formularioConsultarAtualizarExcluir2.php\">Voltar</a>";
	        }
	        
	    } else {
	        
	        $resultadoUsu = consultarTodosRegistrosBOusuario();
	        
	        if($resultadoUsu->rowCount() > 0)
	        {
	            //Mais informacoes em http://php.net/manual/en/pdostatement.fetch.php
	            while($registroUsu = $resultadoUsu->fetch(PDO::FETCH_OBJ))
	            {
	                echo "ID: " . $registroUsu->id_usu . "<br>";
	                echo "Nome de Usuario: " . $registroUsu->nome_usu . "<br>";
	                echo "Senha: " . $registroUsu->senha . "<br>";
	                echo "Nome: " . $registroUsu->nome . "<br>";
	                echo "CPF: " . $registroUsu->cpf . "<br>";
	                echo "Tipo de Usuario: " . $registroUsu->tipo . "<br>";
	                echo "Email: " . $registroUsu->email . "<br>";
	                echo "Sexo: " . $registroUsu->sexo . "<br>";
	                echo "Telefone: " . $registroUsu->telefone . "<br><p/>";
	            }
	            
	        }
	        
	        else {
	            header('Location:../index.php');
	        }
	    }
	    
	    
	    
	}
	
	if($_POST["acao"] == "Consultar receitas") {
	    
	    $id_receita = $_POST['id_receita'];
	    
	    if(!empty($id_receita)) {
	        $resultadoRec = consultarRegistrosPorIDBOreceitas($id_receita);
	        
	        if($resultadoRec->rowCount() == 1) {
	            
	            //fetch(PDO::FETCH_OBJ)  retorna um objeto anonimo com nomes de propriedades
	            //que correspondem aos nomes das colunas da tabela no banco
	            $registroRec = $resultadoRec->fetch(PDO::FETCH_OBJ);
	            
	            echo "ID receitas.: " . $registroRec->id_receita . "<br>";
	            echo "Nome.........: " . $registroRec->nome_receita . "<br>";
	            echo "ingredientes..: " . $registroRec->ingredientes . "<br>";
	            echo "Dificuldade..: " . $registroRec->dificuldade . "<br>";
	            echo "Tempo........: " . $registroRec->tempo . "<br>";
	            echo "Nota.........: " . $registroRec->nota . "<br><p/>";
	        } else {
	            echo "Não há registro com ID=$id_receita<br>";
	            echo "<a href=\"../Paginas/formularioConsultarAtualizarExcluir.php\">Voltar</a>";
	        }
	        
	    } else {
	        
	        $resultadoRec = consultarTodosRegistrosBOreceitas();
	        
	        if($resultadoRec->rowCount() > 0)
	        {
	            //Mais informacoes em http://php.net/manual/en/pdostatement.fetch.php
	            while($registroRec = $resultadoRec->fetch(PDO::FETCH_OBJ))
	            {
	                echo "ID receitas..: " . $registroRec->id_receita . "<br>";
	                echo "Nome.........: " . $registroRec->nome_receita . "<br>";
	                echo "ingredientes..: " . $registroRec->ingredientes . "<br>";
	                echo "Dificuldade..: " . $registroRec->dificuldade . "<br>";
	                echo "Tempo........: " . $registroRec->tempo . "<br>";
	                echo "Nota.........: " . $registroRec->nota . "<br><p/>";
	            }
	            
	        }
	        
	        else {
	            header('Location:../index.php');
	        }
	    }
	    
	    
	    
	}
	
?>
