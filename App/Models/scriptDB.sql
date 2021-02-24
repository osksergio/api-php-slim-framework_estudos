USE gerenciador_lojas;

CREATE TABLE lojas (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  telefone VARCHAR(13) NOT NULL,
  endereco VARCHAR(200) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE produtos (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	loja_id INT UNSIGNED NOT NULL,
	nome VARCHAR(100) NOT NULL,
	preco DECIMAL NOT NULL,
	quantidade INT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT fk_produtos_loja_id_lojas_id
		FOREIGN KEY (loja_id) REFERENCES lojas(id)
);

INSERT into lojas (nome, telefone, endereco) VALUES ('Codeeasy', '0000-0000', 'Rua CE');

DELETE from lojas where lojas.id = 2;

INSERT into produtos (loja_id, nome, preco, quantidade)
	VALUES(1, 'Teclado', 40.00, 20);s