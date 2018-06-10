CREATE TABLE usuario(
    id_usuario SERIAL,
    login_usuario VARCHAR(15) NOT NULL,
    senha_usuario VARCHAR(20) NOT NULL,
    PRIMARY KEY(id_usuario)
);