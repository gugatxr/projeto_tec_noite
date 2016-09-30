-- Cria base de dados
CREATE DATABASE IF NOT EXISTS imobiliaria DEFAULT CHARACTER set utf8 DEFAULT COLLATE utf8_general_ci;

USE imobiliaria;

-- Tabela permissões
CREATE TABLE IF NOT EXISTS permissoes(
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  descricao VARCHAR(50) NOT NULL UNIQUE KEY,
  permissoes VARCHAR(50) NOT NULL
);


-- tabela usuarios
CREATE TABLE IF NOT EXISTS usuarios(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  usuario VARCHAR(45) NOT NULL UNIQUE KEY,
  email VARCHAR(45) NOT NULL,
  senha VARCHAR(200) NOT NULL,
  id_permissoes INT(10) NOT NULL,

  CONSTRAINT PrkPermissoes FOREIGN KEY (id_permissoes) REFERENCES permissoes(id)
);

-- tabela estados
CREATE TABLE IF NOT EXISTS estados(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL UNIQUE KEY,
    sigla VARCHAR(4) NOT NULL UNIQUE KEY DEFAULT 'rs'
);

-- Tabela Cidades
CREATE TABLE IF NOT EXISTS cidades(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY,
      id_estado INT(10) NOT NULL,

      CONSTRAINT PrkEstados FOREIGN KEY (id_estado) REFERENCES estados(id)
);
-- Tabela Bairros
CREATE TABLE IF NOT EXISTS bairros(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50) NOT NULL UNIQUE KEY
);

-- Tabela com tipo logradouros. Ex.: rua, avenida, estrada...
CREATE TABLE IF NOT EXISTS tipo_logradouros(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(50) NOT NULL UNIQUE KEY
);

-- cria tabela telefone
CREATE TABLE IF NOT EXISTS telefone(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    telefone VARCHAR(13)
);
-- Tabela clientes
CREATE TABLE IF NOT EXISTS clientes(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cpf_cnpj VARCHAR(14),
    id_tipo_logradouros INT(10),
    logradouro VARCHAR(50),
    numero VARCHAR(50),
    complemento VARCHAR(50),
    id_bairro INT(10),
    id_cidade INT(10),
    cep VARCHAR (10),
    email VARCHAR(50),
    dt_nascimento DATE,
    
    
	CONSTRAINT fk_tipo_logradouro FOREIGN KEY (id_tipo_logradouros) REFERENCES tipo_logradouros(id),
	CONSTRAINT fk_bairro FOREIGN KEY (id_bairro) REFERENCES bairros(id),
	CONSTRAINT fk_cidade FOREIGN KEY (id_cidade) REFERENCES cidades(id)    
    
);
-- Tabela categoria. Ex.: Casa, apartamento etc.
CREATE TABLE IF NOT EXISTS categoria(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);

--  tabela tipo imovel para especificar se é venda etc.
CREATE TABLE IF NOT EXISTS tipo_imovel(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);


-- Tabela imoveis
CREATE TABLE IF NOT EXISTS imoveis(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    id_tipo_logradouros INT(10),
    logradouro VARCHAR(50),
    numero VARCHAR(50),
    complemento VARCHAR(50),
    id_bairro INT(10),
    id_cidade INT(10),
	valor DECIMAL(10,2),
    area DECIMAL(10,2),
    cep VARCHAR(10),
    finalidade VARCHAR(40),
    status varchar(40),
    id_cliente INT(10),
    tipo VARCHAR(40),
	
	CONSTRAINT fk_tipo_logradouro_imoveis FOREIGN KEY (id_tipo_logradouros) REFERENCES tipo_logradouros(id),
    CONSTRAINT fk_cliente_imoveis FOREIGN KEY (id_cliente) REFERENCES clientes(id),
	CONSTRAINT fk_bairro_imoveis FOREIGN KEY (id_bairro) REFERENCES bairros(id),
	CONSTRAINT fk_cidade_imoveis FOREIGN KEY (id_cidade) REFERENCES cidades(id)    
); 

-- Tabela fotos

CREATE TABLE IF NOT EXISTS fotos (
	id INT (10) AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL,
    caminho VARCHAR(50) NOT NULL UNIQUE KEY,
    id_imovel INT (10) NOT NULL -- , 

    -- CONSTRAINT PrkImovel FOREIGN KEY (id_imovel) REFERENCES imoveis(id)
);
-- tabela videos
CREATE TABLE IF NOT EXISTS videos(
	id INT (10) AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(50) NOT NULL,
    caminho VARCHAR(50) NOT NULL UNIQUE KEY,
    id_imovel INT (10) NOT NULL-- ,

    -- CONSTRAINT fk_imovel FOREIGN KEY (id_imovel) REFERENCES imoveis(id)
);

 -- Tabela Historico
CREATE TABLE IF NOT EXISTS historicos(
	  id INT(10) PRIMARY KEY AUTO_INCREMENT,
      descricao VARCHAR(50) NOT NULL UNIQUE KEY
);
-- Tabela Financeiro
CREATE TABLE IF NOT EXISTS financeiro(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  data DATE NOT NULL,
  id_historico INT(10) NOT NULL,
  valor REAL NOT NULL,

  CONSTRAINT fk_historico FOREIGN KEY (id_historico) REFERENCES historicos(id)
);


INSERT INTO permissoes VALUE (NULL, 'Administrador', 'usuarios,1,1,1,1,|permissoes,1,1,1,1,');

INSERT INTO usuarios (nome, usuario, email, senha, id_permissoes) VALUE ('Administrador', 'admin', 'admin@admin', '$2y$10$rmw0jqC8VV5k0w.ppcPqBOfnuwSMgWf7FqDuYCmllQX.Vk4Y74Oi2', 1);

INSERT INTO bairros (descricao) VALUES('Centro');

INSERT INTO tipo_logradouros (descricao) VALUES ('Aeroporto'),('Alameda'),('Área'),('Avenida'),('Campo'),('Chácara'),('Colônia'),('Condomínio'),('Conjunto'),('Distrito'),('Esplanada'),('Estação'),('Estrada'),('Favela'),('Feira'),('Jardim'),('Ladeira'),('Lago'),('Lagoa'),('Largo'),('Loteamento'),('Morro'),('Núcleo'),('Parque'),('Passarela'),('Pátio'),('Praça'),('Quadra'),('Recanto'),('Residencial'),('Rodovia'),('Rua'),('Setor'),('Sítio'),('Travessa'),('Trecho'),('Trevo'),('Vale'),('Vereda'),('Via'),('Viaduto'),('Viela'),('Vila');
INSERT INTO estados(descricao, sigla) VALUES ("Acre","AC") , ("Alagoas","AL") , ("Amapá","AP") , ("Amazonas","AM") , ("Bahia","BA") , ("Ceará","CE") , ("Distrito Federal","DF") , ("Espírito Santo","ES") , ("Goiás","GO") , ("Maranhão","MA") , ("Mato Grosso","MT") , ("Mato Grosso do Sul","MS") , ("Minas Gerais","MG") , ("Pará","PA") , ("Paraíba","PB") , ("Paraná","PR") , ("Pernambuco","PE") , ("Piauí","PI") , ("Rio de Janeiro","RJ") , ("Rio Grande do Norte","RN") , ("Rio Grande do Sul","RS") , ("Rondônia","RO") , ("Roraima","RR") , ("Santa Catarina","SC") , ("São Paulo","SP") , ("Sergipe","SE");
INSERT INTO cidades (descricao, id_estado) VALUES ('Tramandaí', 21);

-- SELECT b.descricao, c.descricao, e.descricao FROM bairros b
-- INNER JOIN cidades c ON (b.id_cidade=c.id)
-- INNER JOIN estados e ON (e.id=c.id_estado);
