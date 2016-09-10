-- Cria base de dados
CREATE DATABASE IF NOT EXISTS imobiliaria DEFAULT CHARACTER set utf8 DEFAULT COLLATE utf8_general_ci;

USE imobiliaria;

-- ######Tabelas
-- Tabela permissões
CREATE TABLE IF NOT EXISTS permissoes(
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  descricao VARCHAR(50) NOT NULL UNIQUE KEY,
  modulo1 INT(2) NOT NULL,
  modulo2 INT(2) NOT NULL,
  modulo3 INT(2) NOT NULL,
  modulo4 INT(2) NOT NULL
);

-- tabela usuarios
CREATE TABLE IF NOT EXISTS usuarios(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  usuario VARCHAR(45) NOT NULL UNIQUE KEY,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(50) NOT NULL,
  id_permissoes INT(10) NOT NULL,

  CONSTRAINT PrkPermissoes FOREIGN KEY (id_permissoes) REFERENCES permissoes(id)
);

<<<<<<< HEAD
-- tabela estados
CREATE TABLE IF NOT EXISTS estados(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL UNIQUE KEY
);

-- Tabela Cidade
CREATE TABLE IF NOT EXISTS cidades(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY,
      id_estado INT(10) NOT NULL,
      
      CONSTRAINT PrkEstados FOREIGN KEY (id_estado) REFERENCES estados(id)
);
-- Tabela Bairros
CREATE TABLE IF NOT EXISTS bairros(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL UNIQUE KEY,
	id_cidade INT(10) NOT NULL,
    
    CONSTRAINT PrkCidades FOREIGN KEY (id_cidade) REFERENCES cidades(id)
);
    
-- Tabela Tipo do Imovel. Residencial, comercial
CREATE TABLE IF NOT EXISTS categoria(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);

CREATE TABLE IF NOT EXISTS tipo_imovel(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);
-- Tabela categoria. Ex.: Casa, apartamento etc.
-- Tabela Logradouro
CREATE TABLE IF NOT EXISTS logradouros(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);
-- Tabela fotos
CREATE TABLE IF NOT EXISTS fotos (
	id INT (10) AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL,
    caminho VARCHAR(50) NOT NULL UNIQUE KEY
);
-- tabela videos
CREATE TABLE IF NOT EXISTS videos(
	id INT (10) AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL,
    caminho VARCHAR(50) NOT NULL UNIQUE KEY
);
-- Tabela imoveis
 CREATE TABLE IF NOT EXISTS imoveis(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    id_logradouro INT(10) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    numero INT(10) NOT NULL,
    id_bairo
    complemento
    id_cidade
    cep
    id_tipo_imovel
    valor
    status
	finalidade
    id_cliente
 );
 
 -- Tabela Historico
CREATE TABLE IF NOT EXISTS historicos(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);
 
 -- ###########################Views
 -- view com usuarios mostrando 
CREATE VIEW IF NOT EXISTS usuarios_permissoes
AS SELECT u.nome, u.usuario, p.descricao, p.modulo1, 
p.modulo2, p.modulo3, p.modulo4
FROM usuarios u
INNER JOIN permissoes p ON (p.id=u.id_permissoes);

=======

CREATE VIEW usuarios_permissoes
AS SELECT u.nome, u.usuario, p.descricao
FROM usuarios u
INNER JOIN permissoes p ON (p.id=u.id_permissoes);

-- Tabela imoveis
-- Tabela fotos
-- CREATE TABLE
-- tabela videos
>>>>>>> 4c60f32b85ce0d4f05498bbb436b3df0934d62d9
-- Tabela clientes

-- Tabela Financeiro



INSERT INTO permissoes VALUE (NULL, 'Administrador', 15,15,15,15);

INSERT INTO usuarios VALUE (NULL, 'Administrador', 'admin', 'admin', 1);
INSERT INTO estados (descricao) VALUES ('Rio Grande do Sul');
INSERT INTO cidades (descricao, id_estado) VALUES ('Tramandaí', 1);
INSERT INTO bairros (descricao, id_cidade) VALUES('Centro', 1);

-- SELECT b.descricao, c.descricao, e.descricao FROM bairros b 
-- INNER JOIN cidades c ON (b.id_cidade=c.id)
-- INNER JOIN estados e ON (e.id=c.id_estado);