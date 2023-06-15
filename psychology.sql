CREATE DATABASE Psychology;

USE Psychology;


CREATE TABLE Persona(
    id_persona INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    telefono INT NOT NULL,
    correo VARCHAR(50) NOT NULL,
    foto MEDIUMBLOB,
    documento VARCHAR(50) NOT NULL,
    tipo_documento VARCHAR(25) NOT NULL,
    tipo_persona VARCHAR(50) NOT NULL
);



