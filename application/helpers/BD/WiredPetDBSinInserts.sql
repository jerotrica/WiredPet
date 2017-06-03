create table wiredpet;

use wiredpet;

CREATE TABLE usuarios (
    idUSUARIOS INT primary key NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Coordenadas VARCHAR(45),
    Mail VARCHAR(45),
    Telefono VARCHAR(45),
    Sexo VARCHAR(45),
    FechaNac VARCHAR(45),
    Domicilio VARCHAR(45));
    

CREATE TABLE login(
    idLOGIN INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUSUARIOS INT,
    Usuario VARCHAR(45),
    Clave VARCHAR(45),
    
    FOREIGN KEY (idUSUARIOS) REFERENCES usuarios(idUsuarios));


CREATE TABLE tipoMascota(
    idTIPOMASCOTA INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    NombreTipo  VARCHAR(45));

CREATE TABLE tamaño(
    idTAMAÑO INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    NombreTamaño  VARCHAR(45));


CREATE TABLE raza(
    idRAZA INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUSUARIOS INT,
    Usuario VARCHAR(45),
    Clave VARCHAR(45),
    
    FOREIGN KEY (idUSUARIOS) REFERENCES usuarios(idUsuarios));

CREATE TABLE mascota(
    idMASCOTA INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	/*fotoperfil*/
    Nombre VARCHAR(45),
    Tamaño VARCHAR(45),
    idTIPOMASCOTA int,
    idRAZA int,
    idTAMAÑO int,
    idUSUARIO int,
    
    FOREIGN KEY (idTIPOMASCOTA) REFERENCES tipoMascota(idTIPOMASCOTA),
    FOREIGN KEY (idRAZA) REFERENCES raza(idRAZA),
    FOREIGN KEY (idTAMAÑO) REFERENCES tamaño(idTAMAÑO),
    FOREIGN KEY (idUSUARIO) REFERENCES usuarios(idUsuarios));
    
    


CREATE TABLE adopcion(
    idADOPCION INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	DetalleAdopcion VARCHAR(45),
    Instance date,
    idMASCOTA int,
    
    FOREIGN KEY (idMASCOTA) REFERENCES mascota(idMASCOTA));

CREATE TABLE confirmarAdopcion (
	idADOPCION INT,
    idUSUARIOS INT,
    FOREIGN KEY (idADOPCION) REFERENCES adopcion(idADOPCION),
    FOREIGN KEY (idUSUARIOS) REFERENCES usuarios(idUsuarios));


CREATE TABLE comentario (
	idCOMENTARIO INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Instancia date,
    Descripcion VARCHAR(400),
    idPUBLICACION int,
    idVALORACIONES int,
    idMASCOTA int,
    FOREIGN KEY (idPUBLICACION) REFERENCES publicacion(idPublicacion),
    FOREIGN KEY (idVALORACIONES) REFERENCES valoraciones(idVALORACIONES),
    FOREIGN KEY (idMASCOTA) REFERENCES mascota(idMASCOTA));


CREATE TABLE valoraciones(
    idVALORACIONES INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    TipoValoracion VARCHAR(30),
    Instancia date);


CREATE TABLE publicacion (
	idPUBLICACION INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Instancia date,
    Descripcion VARCHAR(400),
    idMASCOTA int,
    FOREIGN KEY (idMASCOTA) REFERENCES mascota(idMASCOTA));

CREATE TABLE citas(
    idCITAS INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Descripcion  VARCHAR(300),
    Instancia DATE);

CREATE TABLE confirmarCita (
	idCITAS INT,
    idMASCOTA INT,
    FOREIGN KEY (idCITAS) REFERENCES citas(idCITAS),
    FOREIGN KEY (idMASCOTA) REFERENCES mascota(idMASCOTA));
    