
/*
    Modelando o SQL.
    Ainda não é a DDL final.
*/


CREATE DATABASE Biblioteca;
USE             Biblioteca;

/*
    Livro - id, nome, quantidade, (FK: Autor), 
    Autor - id, nome
    Usuario - Comum/Admin - id, nome, isAdmin, empréstimos ativos, histórico, - emprestar pela web
*/
/*
    Tabela - plural
    Campos - Singular
*/


CREATE TABLE Autores (
    AutorId                  INT          NOT NULL AUTO_INCREMENT,
    AutorNome                VARCHAR(60)  NOT NULL,

    PRIMARY KEY (AutorId)
);

CREATE TABLE Livros (
    LivroId                  INT          NOT NULL AUTO_INCREMENT,
    LivroNome                VARCHAR(120) NOT NULL,
    LivroQuantidade          INT,

    LivroAutor               INT,

    PRIMARY KEY (LivroId),

    FOREIGN KEY (LivroAutor) REFERENCES Autores(AutorId)
);

CREATE TABLE Usuarios (
    UsuarioId                INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
    UsuarioNome              VARCHAR(80)  NOT NULL,
    UsuarioEmail             VARCHAR(80)  NOT NULL,
    UsuarioTipo              VARCHAR(5)   NOT NULL,
    UsuarioSenha             VARCHAR(355) NOT NULL
);

SELECT * FROM Usuarios;
