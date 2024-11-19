 DROP DATABASE IF EXISTS club_deportivo;
 CREATE DATABASE IF NOT EXISTS club_deportivo;
 USE club_deportivo;
 
 create TABLE socio(
 	id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(100) not null,
    edad int not null,
    contraseña varchar(255) not null,
    usuario varchar(12) unique not null,
    telefono varchar(255) not null,
    foto varchar(100) not null default 'usuario.jpg'
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
    fecha varchar(255) not null,
    FOREIGN KEY(id_socio) REFERENCES socio(id)
 );
 
 create table noticia(
 	id int PRIMARY KEY AUTO_INCREMENT,
    titulo varchar(200) not null,
    contenido varchar(999) not null,
    imagen varchar(100) default 'usuario.jpg',
    fecha varchar(30) not null
 );
 
 CREATE TABLE citas (
    id_socio INT NOT NULL,
    id_servicio INT NOT NULL,
    fecha VARCHAR(30) not null,
    hora VARCHAR(30) not null,
    estado varchar(30) default 'activa',
    PRIMARY KEY (id_socio, id_servicio, fecha),
    FOREIGN KEY (id_socio) REFERENCES socio(id),
    FOREIGN KEY (id_servicio) REFERENCES servicio(id)
);

-- Tabla de Socios
INSERT INTO socio (nombre, edad, contraseña, usuario, telefono, foto) VALUES
('Juan Pérez', 28, 1234, 'juanp', 5551234, 'usuario.jpg'),
('María López', 34, 5678, 'marial', 5555678, 'usuario.jpg'),
('Carlos Sánchez', 21, 9012, 'carlos', 5559012, 'usuario.jpg'),
('Ana García', 45, 3456, 'anag', 5553456, 'usuario.jpg');

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
INSERT INTO noticia (titulo, contenido, imagen, fecha) 
VALUES 
('Innovación en tecnología espacial impulsa nuevos descubrimientos', 
'La industria aeroespacial ha experimentado un crecimiento significativo en los últimos años, gracias a avances tecnológicos en áreas como la propulsión y la robótica. Empresas privadas y agencias gubernamentales trabajan juntas para explorar nuevos límites. Recientemente, se lanzó un satélite innovador capaz de recopilar datos de alta precisión sobre el cambio climático. Este logro destaca el papel de la tecnología en resolver problemas globales y fomentar la colaboración internacional en proyectos científicos.', 
'tecnologia.jpg', 
'2024-11-18');

INSERT INTO noticia (titulo, contenido, imagen, fecha) 
VALUES 
('El impacto del cambio climático se intensifica en regiones vulnerables', 
'Estudios recientes confirman que el cambio climático está afectando de manera desproporcionada a las comunidades más vulnerables. Las sequías severas, el aumento del nivel del mar y los desastres naturales ponen en riesgo la seguridad alimentaria y la estabilidad económica de millones de personas. Expertos llaman a una acción inmediata para mitigar estos efectos, promoviendo el uso de energías renovables y políticas sostenibles que protejan tanto a los ecosistemas como a las comunidades humanas en riesgo.', 
'medioambiente.jpg', 
'2024-11-15');

INSERT INTO noticia (titulo, contenido, imagen, fecha) 
VALUES 
('Nuevos avances en inteligencia artificial revolucionan la salud', 
'Un grupo de investigadores ha desarrollado un sistema de inteligencia artificial capaz de diagnosticar enfermedades con una precisión superior al 90%. Esta tecnología, basada en redes neuronales profundas, analiza imágenes médicas y registros de pacientes en cuestión de segundos. La comunidad médica celebra este avance como un paso importante hacia la medicina personalizada, que permite tratamientos más efectivos y accesibles para un mayor número de personas.', 
'salud.jpg', 
'2024-11-10');

INSERT INTO noticia (titulo, contenido, imagen, fecha) 
VALUES 
('Descubren una antigua ciudad sumergida en el Mediterráneo', 
'Arqueólogos marinos han encontrado los restos de una ciudad sumergida que se cree que data de hace más de 3,000 años. Este hallazgo proporciona información valiosa sobre las civilizaciones antiguas que habitaron la región y cómo interactuaron con su entorno. El equipo de investigación está utilizando tecnología de escaneo submarino para mapear y preservar el sitio. Este descubrimiento arroja nueva luz sobre las conexiones culturales y económicas de la época.', 
'cultura.jpg', 
'2024-11-12');

INSERT INTO noticia (titulo, contenido, imagen, fecha) 
VALUES 
('Crece el interés por el turismo sostenible en todo el mundo', 
'El turismo sostenible está ganando popularidad a medida que los viajeros buscan experiencias más respetuosas con el medio ambiente y las culturas locales. Iniciativas como los ecoalojamientos y las actividades de bajo impacto están transformando la industria turística. Expertos destacan que este cambio no solo beneficia al medio ambiente, sino que también impulsa economías locales, fomentando un desarrollo inclusivo y equilibrado. La adopción de prácticas sostenibles es clave para el futuro del turismo global.', 
'turismo.jpg', 
'2024-11-16');

-- Tabla de Citas
INSERT INTO citas (id_socio, id_servicio, fecha, hora) VALUES
(1, 1, '2023-10-20', '10:00'),
(2, 2, '2023-10-21', '11:30'),
(3, 3, '2023-10-22', '09:00'),
(4, 4, '2023-10-23', '15:30'),
(1, 3, '2023-10-24', '14:00');

 
 