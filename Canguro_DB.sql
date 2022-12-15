# BASE DE DATOS - CANGURO MATEMATICO

create database DBCasaCanguro;		#crear una base de datos
use DBCasaCanguro;					#usar base de datos


############ TABLAS


create table tutorias(			
id_tutoria int Primary Key,
nombre varchar(50), 
descripcion varchar(50), 
material varchar(50), 
tipo varchar(50), 
nivel varchar (50), 
profesorNombre varchar(50),
fechaTutoria datetime,
enlaceZoom varchar(50)
);

create table usuario(			
id_usuario int Primary Key,
rol int,
nombre varchar(50), 
apellido1 varchar(50),
apellido2 varchar(50),
correo varchar(50),
telefono int,
password varchar(50),
direccion varchar(50),
fechaNacimiento datetime,
imagen varchar(50),
id_tutoria int,
foreign key(id_tutoria) references tutorias(id_tutoria)
);


CREATE TABLE usuarios (
  id int NOT NULL AUTO_INCREMENT,
  email varchar(50) DEFAULT NULL,
  password char(60) DEFAULT NULL,
  token varchar(15) DEFAULT NULL,
  confirmado tinyint(1) DEFAULT NULL,
  rol tinyint(1) DEFAULT NULL,
  fechaNacimiento varchar(50) DEFAULT NULL,
  direccion varchar(50) DEFAULT NULL,
  cedula varchar(30) DEFAULT NULL,
  telefono varchar(10) DEFAULT NULL,
  apellido2 varchar(60) DEFAULT NULL,
  apellido1 varchar(60) DEFAULT NULL,
  nombre varchar(60) DEFAULT NULL,
  imagen varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=5;


ALTER TABLE `usuarios`
  ADD CONSTRAINT `tutoria` FOREIGN KEY (`id_Tutoria`) REFERENCES `tutorias` (`id_tutoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE tutorias ADD COLUMN id_Profesor int(11) null;

ALTER TABLE `tutorias`
  ADD CONSTRAINT `profesor` FOREIGN KEY (`id_Profesor`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE `usuarios` ADD CONSTRAINT `tutoria` FOREIGN KEY (`id_tutoria`) REFERENCES `tutorias`(`id_tutoria`) ON DELETE CASCADE ON UPDATE CASCADE;  
-- Agregar usuario para testing
-- INSERT INTO usuarios (email, password) VALUES ("test@gmail.com","test");
-- select * from usuario;
--id_tutoria para estudiantes creado

select * from usuarios;
update usuarios set rol=1 where id=1;  



//cambios para estudiante
  ALTER TABLE tutorias ADD COLUMN id int(11) null;
