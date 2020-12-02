"# WEBI_2020_FLEX" 


Baixar docker no site https://www.docker.com/products/docker-desktop
iniciando docker com banco de dados 

Executar no CMD:
docker run --restart=always --name mysql -e MYSQL_ROOT_PASSWORD=docker -d -p 3306:3306 mysql:latest

Executar no BD:
CREATE DATABASE minhafazenda DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;</span></pre>


USE crudsimples;


CREATE TABLE contatos (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    celular VARCHAR(15) DEFAULT NULL,
    PRIMARY KEY(id)
);