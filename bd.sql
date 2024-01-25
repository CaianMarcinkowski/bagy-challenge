----- Estrutura usada para realizar a Tarefa 5: Conexão com Banco de Dados

create table usuarios(
	id int not null,
	nome varchar(250) not null,
	email varchar(250) not null
);

insert into usuarios(id, nome, email) Values (1, 'Caian', 'caianferre@gmail.com');
insert into usuarios(id, nome, email) Values (2, 'Marcinho', 'marcinhoferre@gmail.com');

select * from usuarios;