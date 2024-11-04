 DROP DATABASE IF EXISTS club_deportivo;
 CREATE DATABASE IF NOT EXISTS club_deportivo;
 USE club_deportivo;
 
 create TABLE socio(
 	id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(100) not null,
    edad int not null,
    contraseña int not null,
    usuario varchar(12) unique not null,
    telefono int not null,
    foto varchar(100)
 );
 
 create table servicio(
 	id int primary key AUTO_INCREMENT,
    descripcion varchar(500) not null,
    duracion int not null,
    precio float DEFAULT 0.00
 );
 
 create table testimonio(
 	id int PRIMARY KEY AUTO_INCREMENT,
    id_socio int not null,
    contenido varchar(500) not null,
    fecha date default CURRENT_TIMESTAMP,
    FOREIGN KEY(id_socio) REFERENCES socio(id)
 );
 
 create table noticia(
 	id int PRIMARY KEY AUTO_INCREMENT,
    titulo varchar(200) not null,
    contenido varchar(999) not null,
    imagen varchar(100) default 'todo.jpg',
    fecha varchar(30) DEFAULT CURRENT_TIMESTAMP
 );
 
 CREATE TABLE citas (
    id_socio INT NOT NULL,
    id_servicio INT NOT NULL,
    fecha VARCHAR(30) DEFAULT CURRENT_TIMESTAMP,
    hora VARCHAR(30) DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_socio, id_servicio, fecha),
    FOREIGN KEY (id_socio) REFERENCES socio(id),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id)
);

 
 