# BASE DE DATOS - CANGURO MATEMATICO

create database DBCasaCanguro;		#crear una base de datos
use DBCasaCanguro;					#usar base de datos


############ TABLAS
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



------------------------------------

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `token` varchar(15) DEFAULT NULL,
  `confirmado` tinyint(1) DEFAULT NULL,
  `rol` tinyint(1) DEFAULT NULL,
  `fechaNacimiento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cedula` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `apellido2` varchar(60) DEFAULT NULL,
  `apellido1` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
