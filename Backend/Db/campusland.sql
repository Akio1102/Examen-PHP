/*Creación de la Base de Datos*/
CREATE DATABASE campuslands;

/*Usar la base de datos*/
USE campuslands;

/*Dropear las tablas si ya existen*/
DROP TABLE IF EXISTS campers;
DROP TABLE IF EXISTS region;
DROP TABLE IF EXISTS departamento;
DROP TABLE IF EXISTS pais;

/*Creación de las tablas*/
CREATE TABLE pais(
    idPais INT NOT NULL AUTO_INCREMENT,
    nombrePais VARCHAR(50) NOT NULL,
    PRIMARY KEY(idPais)
);
CREATE TABLE departamento(
    idDep INT NOT NULL AUTO_INCREMENT,
    nombreDep VARCHAR(50) NOT NULL,
    idPais INT,
    PRIMARY KEY (idDep),
    FOREIGN KEY (idPais) REFERENCES pais(idPais)
);
CREATE TABLE region(
    idReg INT NOT NULL AUTO_INCREMENT,
    nombreReg VARCHAR(50) NOT NULL,
    idDep INT,
    PRIMARY KEY (idReg),
    FOREIGN KEY (idDep) REFERENCES departamento(idDep)
);
CREATE TABLE campers(
    idCamper INT NOT NULL AUTO_INCREMENT,
    nombreCamper VARCHAR(50) NOT NULL,
    apellidoCamper VARCHAR(50) NOT NULL,
    fechaNac DATE NOT NULL,
    idReg INT,
    PRIMARY KEY (idCamper),
    FOREIGN KEY (idReg) REFERENCES region(idReg)
);

/*Observar las tablas de la base de datos */
SHOW TABLES;

/*Observar las columnas de cada tabla*/
DESCRIBE pais;
DESCRIBE departamento;
DESCRIBE region;
DESCRIBE campers;

INSERT INTO pais (nombrePais) VALUES ("Brazil");