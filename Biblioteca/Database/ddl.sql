
CREATE DATABASE     Biblioteca;
USE                 Biblioteca;

CREATE TABLE Livros (
    LivroId         INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    LivroTitulo     VARCHAR(120) NOT NULL,
    LivroAutor      VARCHAR(80)  NOT NULL,
	LivroQuantidade INT          NOT NULL,
    LivroCodigo     INT          NOT NULL
);

SELECT * FROM Livros;

CREATE TABLE Usuarios (
    UsuarioId       INT         NOT NULL PRIMARY KEY AUTO_INCREMENT,
    UsuarioNome     VARCHAR(80) NOT NULL,
    UsuarioEmail    VARCHAR(80) NOT NULL,
    UsuarioTipo     ENUM('Comum', 'Admin') NOT NULL,
    UsuarioSenha    VARCHAR(355) NOT NULL
);

SELECT * FROM Usuarios;



