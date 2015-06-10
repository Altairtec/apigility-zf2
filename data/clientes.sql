CREATE TABLE cliente (
    id INTEGER PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL, 
    email VARCHAR(100) NOT NULL 
);

INSERT INTO cliente (nome, email) values ('Jonathan', 'jdoliveirasa@gmail.com');
INSERT INTO cliente (nome, email) values ('Pedro', 'pedro@gmail.com');
INSERT INTO cliente (nome, email) values ('João', 'joao@gmail.com');

