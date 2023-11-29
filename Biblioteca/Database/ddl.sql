
CREATE DATABASE     Biblioteca;
USE                 Biblioteca;

CREATE TABLE Autores (
    AutorId         INT NOT NULL AUTO_INCREMENT,
    AutorNome       VARCHAR(60) NOT NULL,

    PRIMARY KEY (AutorId)
);

CREATE TABLE CodigosLivro (
    CodigoLivroId   INT NOT NULL AUTO_INCREMENT,
    CodigoTitulo    VARCHAR(120) NOT NULL,

    PRIMARY KEY (CodigoLivroId)
);

CREATE TABLE Livros (
    LivroId         INT NOT NULL AUTO_INCREMENT,
    LivroTitulo     VARCHAR(120) NOT NULL,
    LivroQuantidade INT,
    LivroAutor      INT,
    LivroCodigo     INT,

    PRIMARY KEY (LivroId),
    FOREIGN KEY (LivroAutor)  REFERENCES Autores(AutorId),
    FOREIGN KEY (LivroCodigo) REFERENCES CodigosLivro(CodigoLivroId)
);

CREATE TABLE Usuarios (
    UsuarioId       INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    UsuarioNome     VARCHAR(80) NOT NULL,
    UsuarioEmail    VARCHAR(80) NOT NULL,
    UsuarioTipo     ENUM('Comum', 'Admin') NOT NULL,
    UsuarioSenha    VARCHAR(355) NOT NULL
);
