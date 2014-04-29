create database informe;

	use informe;

create table informe (
id int not null auto_increment,
autor varchar(100) not null,
titulo varchar(100) not null,
detalles varchar(150) not null,
primary key(id)
);

drop table informe;
