create database sistemaLogin;

use sistemaLogin;

create table usuario(
	idUser int(04) auto_increment,
    nome varchar(30),
    sobrenome varchar(30),
    celular varchar(15),
    dtNasc date,
    email varchar(140) not null,
    senha varchar(16) not null,
    primary key (idUser)
);

ALTER TABLE usuario MODIFY senha varchar(200);

insert into usuario (nome, email, senha) values ('teste', 'teste@teste.com', '1234'); 

select * from usuario;

truncate usuario;

describe usuario;

drop table usuario;

create table biblioteca(
idLivro int auto_increment,
nome varchar(60) not null,
dtPosse datetime not null,
primary key(idLIvro)
);

