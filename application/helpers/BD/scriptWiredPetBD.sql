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
    
   
    