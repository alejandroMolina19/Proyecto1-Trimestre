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

-- Tabla de Socios
INSERT INTO socio (nombre, edad, contraseña, usuario, telefono, foto) VALUES
('Juan Pérez', 28, 1234, 'juanp', 5551234, 'juan.jpg'),
('María López', 34, 5678, 'marial', 5555678, 'maria.jpg'),
('Carlos Sánchez', 21, 9012, 'carlos', 5559012, NULL),
('Ana García', 45, 3456, 'anag', 5553456, 'ana.jpg');

-- Tabla de Servicios
INSERT INTO servicio (descripcion, duracion, precio) VALUES
('Entrenamiento Personalizado', 60, 20.00),
('Clases de Yoga', 90, 15.00),
('Nutrición y Dietas', 30, 25.00),
('Masajes Deportivos', 60, 30.00);

-- Tabla de Testimonios
INSERT INTO testimonio (id_socio, contenido, fecha) VALUES
(1, 'El mejor club deportivo al que he asistido. Muy recomendado.', '2023-10-01'),
(2, 'Excelentes servicios y gran equipo de trabajo.', '2023-09-15'),
(3, 'Las clases de yoga son muy relajantes y útiles.', '2023-08-20'),
(4, 'La atención personalizada realmente hace una diferencia.', '2023-10-05');

-- Tabla de Noticias
INSERT INTO noticia (titulo, contenido, imagen, fecha) VALUES
('Nuevo servicio de entrenamiento personal', 'Anunciamos nuestro nuevo servicio de entrenamiento personalizado para miembros.', 'entrenamiento.jpg', '2023-09-01'),
('Clases de yoga renovadas', 'Nuestras clases de yoga ahora incluyen nuevos ejercicios y técnicas.', 'yoga.jpg', '2023-09-15'),
('Promociones en masajes deportivos', 'Descuento en nuestro servicio de masajes deportivos durante octubre.', 'masaje.jpg', '2023-10-01'),
('Nueva dieta disponible para miembros', 'Ahora ofrecemos planes de dieta personalizados para cada socio.', 'dieta.jpg', '2023-10-10');

-- Tabla de Citas
INSERT INTO citas (id_socio, id_servicio, fecha, hora) VALUES
(1, 1, '2023-10-20', '10:00'),
(2, 2, '2023-10-21', '11:30'),
(3, 3, '2023-10-22', '09:00'),
(4, 4, '2023-10-23', '15:30'),
(1, 3, '2023-10-24', '14:00');

 
 