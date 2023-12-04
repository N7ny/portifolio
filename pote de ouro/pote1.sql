create database pote;
use pote;

create table cadastro(
id int auto_increment primary key,
nome varchar (120) not null,
email varchar (150) not null,
senha varchar (800) not null,
nascimento date not null,
termo boolean not null
);

select*from cadastro;