<?php
	include '../DAO/agendaDAO.php';

	function inserirBOusuario($nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone) {
	    
	    $nome_usu = strtoupper($nome_usu);
	    
	    inserirDAOusuario($nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone);
	}
	
	function inserirBOreceitas($nome_receita, $ingredientes, $dificuldade, $tempo, $nota) {
	    
	    $nome_receita = strtoupper($nome_receita);
	    
	    inserirDAOreceitas($nome_receita, $ingredientes, $dificuldade, $tempo, $nota);
	}
	
	function consultarTodosRegistrosBOusuario() {
	    return consultarTodosRegistrosDAOusuario();
	}
	
	function consultarTodosRegistrosBOreceitas() {
	    return consultarTodosRegistrosDAOreceitas();
	}
	
	function consultarRegistrosPorIDBOusuario($id_usu) {
	    return consultarRegistrosPorIDDAOusuario($id_usu);
	}
	
	function consultarRegistrosPorIDBOreceitas($id_receita) {
	    return consultarRegistrosPorIDDAOreceitas($id_receita);
	}
	
	function atualizarRegistroBOusuario($id_usu, $nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone) {
	    return atualizarRegistroDAOusuario($id_usu, $nome_usu, $senha, $nome, $cpf, $tipo, $email, $sexo, $telefone);
	}
	
	function atualizarRegistroBOreceitas($id_receita, $nome_receita, $ingredientes, $dificuldade, $tempo, $nota) {
	    return atualizarRegistroDAOreceitas($id_receita, $nome_receita, $ingredientes, $dificuldade, $tempo, $nota);
	}
	
	function excluirRegistrosPorIDBOusuario($id_usu) {
	    return excluirRegistrosPorIDDAOusuario($id_usu);
	}
	
	function excluirRegistrosPorIDBOreceitas($id_receita) {
	    return excluirRegistrosPorIDDAOreceitas($id_receita);
	}
?>