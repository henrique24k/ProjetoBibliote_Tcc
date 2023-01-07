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

select * from usuario;

truncate usuario;

describe usuario;

drop table usuario;

create table livro(
idLivro int auto_increment,
nome varchar(60) not null,
genero varchar(20),
autor varchar(30),
dtPosse datetime,
primary key(idLIvro)
);

drop table livro;

select * from livro;
truncate table livro;
