CREATE DATABASE  IF NOT EXISTS scriptbd;
USE scriptbd;

create table usuario (
	id_usu int(12) not null AUTO_INCREMENT,
	nome_usu varchar(40) not null,
    senha varchar(12) not null,
	nome varchar(45),
    CPF varchar(14) not null unique,
    tipo varchar(3) not null,
    email varchar(50) not null unique,
    sexo varchar(15),
    telefone varchar(30),
    
    primary key (id_usu)
);

create table receitas (
	id_receita int(12) not null AUTO_INCREMENT,
	nome_receita varchar(50) not null,
	ingredientes varchar(8000),
	dificuldade varchar(15),
    tempo int,
    nota int,
 
	primary key (id_receita)
);

create table interface (
	id_nt int(12) not null AUTO_INCREMENT,
	estilo varchar(50) not null,
	recomendacoes varchar(500),
	cor varchar(20),
 
	primary key (id_nt)
);

create table mensagem (
	id_men int(12) not null AUTO_INCREMENT,
	data_postagem date,
	remetente varchar(50),
	destino varchar(50),
 
	primary key (id_men)
);

create table tipo_usu (
	id_tipo int(12) not null AUTO_INCREMENT,
	descricao varchar (50),
 
	primary key (id_tipo)
);






insert into usuario values 	(1, 'admin', 'admin','Administrador', '000.000.000-01', 'adm', 'admin@yahoo.com', 'masculino', '1111-1111'),
							(2, 'alan', 'alan','Alan Silva', '000.000.000-02', 'usu', 'alan@yahoo.com', 'masculino', '2222-2222'),
							(3, 'benedito', 'benedito','Benedito Silva', '000.000.000-03', 'usu', 'bene@yahoo.com', 'masculino', '3333-3333'),
							(4, 'carlos', 'carlos','Carlos Silva', '000.000.000-04', 'usu', 'carlos@yahoo.com', 'masculino', '4444-4444'),
							(5, 'denis', 'denis','Denis Silva', '000.000.000-05', 'usu', 'denis@yahoo.com', 'masculino', '5555-5555');
                            
insert into tipo_usu values (1, 'Administrador - Mantem o sistema e os Moderadores'),
							(2, 'Moderador - Modera os Usuários e as receitas'),
                            (3, 'Usuario - O usuário comum');
                            

                    
