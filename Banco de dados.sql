create database gilbertojunior744;
create table contatos(
	id_contato int(5) auto_increment primary key,
    nome varchar(255),
    sobrenome varchar(255),
    celular varchar(15),
    email varchar(255),
    data_cadastro datetime default current_timestamp,
    data_atualizacao datetime,
    img varchar(255)
);

create table grupos (
	id_grupo int(5) auto_increment primary key,
    nome_grupo varchar(255),
    data_criacao datetime default current_timestamp,
    data_atulizacao datetime
    
);

create table evento (
	id_evento int(5)auto_increment primary key,
    nome varchar(255),
    data_evento date ,
    horario time,
    descricao text(500),
    contato_participante varchar(15),
    data_criacao datetime default current_timestamp,
    data_atulizacao datetime
    
)

