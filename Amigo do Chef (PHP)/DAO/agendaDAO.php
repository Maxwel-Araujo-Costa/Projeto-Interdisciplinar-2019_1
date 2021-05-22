<?php
	include '../Util/conexaoBD.php';
	
	
	
	function inserirDAOusuario($nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone) {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        
	        $consulta = "insert into usuario (nome_usu, senha, nome, cpf, tipo, email, sexo, telefone) values ('$nome_usu', '$senha', '$nome', '$cpf', '$tipo', '$email', '$sexo', '$telefone')";
	        
	        //EXEC utiliza-se para insercao, atualizacao e exclusao
	        $bancoDeDados->exec($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro agendaDAO: " . $e;
	    }
	    
	}
	
	function inserirDAOreceitas($nome_receita, $ingredientes, $dificuldade, $tempo, $nota) {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        
	        $consulta = "insert into receitas (nome_receita, ingredientes, dificuldade, tempo, nota) values ('$nome_receita', '$ingredientes', '$dificuldade', '$tempo', '$nota')";
	        
	        //EXEC utiliza-se para insercao, atualizacao e exclusao
	        $bancoDeDados->exec($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro agendaDAO: " . $e;
	    }
	    
	}
	
	function consultarTodosRegistrosDAOusuario() {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        $consulta = "select * from usuario";
	        
	        //QUERY utiliza-se apenas para consulta
	        return $bancoDeDados->query($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarTodosRegistrosDAOusuario: " . $e->getMessage();
	    }
	}
	
	function consultarTodosRegistrosDAOreceitas() {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        $consulta = "select * from receitas";
	        
	        //QUERY utiliza-se apenas para consulta
	        return $bancoDeDados->query($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarTodosRegistrosDAOreceitas: " . $e->getMessage();
	    }
	}
	
	function consultarRegistrosPorIDDAOusuario($id_usu) {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        $consulta = "select * from usuario where id_usu = " . $id_usu;
	        
	        return $bancoDeDados->query($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAOusuario: " . $e->getMessage();
	    }
	}
	
	function consultarRegistrosPorIDDAOreceitas($id_rec) {
	    
	    $bancoDeDados = conectar();
	    
	    try {
	        $consulta = "select * from receitas where id_receita = " . $id_rec;
	        
	        return $bancoDeDados->query($consulta);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAOreceitas: " . $e->getMessage();
	    }
	}
	
	function atualizarRegistroDAOusuario($id_usu, $nome_usu, $senha, $nome, $cpf, $tipo,  $email, $sexo, $telefone) {
	    $bancoDeDados = conectar();
	    
	    try {
	        $sql = "update usuario set nome_usu = '$nome_usu', senha = '$senha', nome = '$nome', cpf = '$cpf', tipo = '$tipo', email = '$email', sexo = '$sexo', telefone = '$telefone' where id_usu = $id_usu";
	        
	        return $bancoDeDados->exec($sql);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
	    }
	}
	
	function atualizarRegistroDAOreceitas($id_receita, $nome_receita, $ingredientes, $dificuldade, $tempo, $nota) {
	    $bancoDeDados = conectar();
	    
	    try {
	        $sql = "update receitas set nome_receita = '$nome_receita', ingredientes = '$ingredientes', dificuldade = '$dificuldade', tempo = '$tempo', nota = '$nota' where id_receita = $id_receita";
	        
	        return $bancoDeDados->exec($sql);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
	    }
	}
	
	function excluirRegistrosPorIDDAOusuario($id_usu) {
	    $bancoDeDados = conectar();
	    
	    try {
	        $sql = "delete from usuario where id_usu = $id_usu";
	        
	        return $bancoDeDados->exec($sql);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
	    }
	}
	
	function excluirRegistrosPorIDDAOreceitas($id_receita) {
	    $bancoDeDados = conectar();
	    
	    try {
	        $sql = "delete from receitas where id_receita = $id_receita";
	        
	        return $bancoDeDados->exec($sql);
	        
	    } catch (Exception $e) {
	        echo "Erro consultarRegistrosPorIDDAO: " . $e->getMessage();
	    }
	}
	
	
?>