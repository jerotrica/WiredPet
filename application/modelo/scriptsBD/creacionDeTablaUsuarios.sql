create database wiredPet;
use wiredPet;



CREATE TABLE usuarios (
    idUSUARIOS INT unique NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Coordenadas VARCHAR(45),
    Mail VARCHAR(45),
    Telefono VARCHAR(45),
    Sexo VARCHAR(45),
    FechaNac VARCHAR(45),
    Domicilio VARCHAR(45)
)
;

select * from usuarios;

drop table usuarios;