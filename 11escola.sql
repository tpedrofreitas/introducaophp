CREATE DATABASE escola_thiago; 
  USE  escola_thiago;
    
CREATE TABLE alunos(
   id INT AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(70)NOT NULL,
   idade INT NOT NULL,
   uf CHAR(2) NOT NULL,
   cidade VARCHAR(50) NOT NULL
);
INSERT INTO alunos(nome, idade, uf, cidade)VALUES
	('Thiago Pedro',22, 'SP','Marilia'),
    ('Carlos Silva',20, 'SP','Bauru'),
    ('Maria Souza',19,'PR','Londrina');