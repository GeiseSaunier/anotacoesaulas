create database acesso;

use acesso;

create table usuarios(
	id int not null primary key auto_increment,
	nome varchar(15) not null,
	sobrenome varchar(25) not null,
	cpf varchar(11) not null,
	senha varchar(32) not null
);
