CREATE DATABASE imobiliaria;

CREATE TABLE imobiliaria.usuarios(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(50),
  usuario VARCHAR(45),
  senha VARCHAR(50),
  id_permissoes INT(10)
);

INSERT INTO imobiliaria.usuarios VALUE (NULL, 'Administrador', 'admin', 'admin', 1)
