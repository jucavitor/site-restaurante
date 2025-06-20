CREATE DATABASE restaurante;

USE restaurante;

CREATE TABLE clientes(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR (60) NOT NULL,
telefone VARCHAR (11),
endereco VARCHAR (80) NOT NULL,
email VARCHAR (80) NOT NULL,
senha VARCHAR (70) NOT NULL
);

CREATE TABLE pratos(
id INT AUTO_INCREMENT PRIMARY KEY,
sabor VARCHAR (80) NOT NULL,
valor_P INT NOT NULL,
valor_M INT NOT NULL, 
valor_G INT NOT NULL
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_prato INT NOT NULL,
    quantidade INT NOT NULL,
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pendente', 'em preparo', 'pronto', 'entregue') DEFAULT 'pendente',
    valor_total INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_prato) REFERENCES pratos(id)
);




-- VERIFICA SE O USUARIO JÁ EXISTE NO BANCO DE DADOS.
DELIMITER //

CREATE PROCEDURE valicacao_cliente(IN PHP_email VARCHAR(90), IN PHP_telefone VARCHAR (20))
BEGIN 
SELECT email, telefone FROM clientes 
WHERE PHP_email = email AND PHP_telefone = telefone;
END//

DELIMITER ;


-- INSERE UM NOVO USUARIO, APÓS UMA VERIFsCAÇÃO
DELIMITER //

CREATE PROCEDURE inserir_cliente(IN PHP_nome VARCHAR(100), IN PHP_telefone VARCHAR(20), IN PHP_senha TEXT, IN PHP_endereco VARCHAR(100), IN PHP_email VARCHAR(90))
BEGIN
INSERT INTO clientes (nome, telefone, senha, endereco, email)
VALUES(PHP_nome, PHP_telefone, PHP_senha, PHP_endereco,PHP_email);
END//

DELIMITER ;

select * from clientes;
