/*
    Modelando o SQL, por enqunto.
    Ainda não é o modelo final.
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

    FOREIGN KEY (LivroAutor) REFERENCES Autores(AutorId)
);

CREATE TABLE Usuarios (
    UsuarioId                INT          NOT NULL AUTO_INCREMENT,
    UsuarioNome              VARCHAR(80),
    UsuarioEmail             VARCHAR(80),
    UsuarioSenha             VARCHAR(355),

    UsuarioIsAdmin           BOOLEAN,
    -- fk
    UsuarioEmprestimosAtivos INT,
    UsuarioHistorico         INT,
    
    PRIMARY KEY(UsuarioId)
);

/*
CREATE TABLE Historico ();
CREATE TABLE EmprestimosAtivos (); -- usuario
CREATE TABLE Emprestimos (); 
*/
