-- Cria base de dados
CREATE DATABASE imobiliaria DEFAULT CHARACTER set utf8 DEFAULT COLLATE utf8_general_ci;

USE imobiliaria;

-- Tabela permissões
CREATE TABLE permissoes(
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  descricao VARCHAR(50) NOT NULL,
  modulo1 INT(2) NOT NULL,
  modulo2 INT(2) NOT NULL,
  modulo3 INT(2) NOT NULL,
  modulo4 INT(2) NOT NULL
);

-- tabela usuarios
CREATE TABLE usuarios(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  usuario VARCHAR(45) NOT NULL UNIQUE KEY,
  senha VARCHAR(50) NOT NULL,
  id_permissoes INT(10) NOT NULL,

  CONSTRAINT PrkPermissoes FOREIGN KEY (id_permissoes) REFERENCES permissoes(id)
);


CREATE VIEW usuarios_permissoes
AS SELECT u.nome, u.usuario, p.descricao
FROM usuarios u
INNER JOIN permissoes p ON (p.id=u.id_permissoes);

-- Tabela imoveis
-- Tabela fotos
-- CREATE TABLE
-- tabela videos
-- Tabela clientes
-- Tabela Bairros
-- Tabela Cidade
-- Logradouro
-- Financeiro
-- Historico

INSERT INTO permissoes VALUE (NULL, 'Administrador', 15,15,15,15);

INSERT INTO usuarios VALUE (NULL, 'Administrador', 'admin', 'admin', 1);
