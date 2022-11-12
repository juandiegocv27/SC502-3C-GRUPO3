# BASE DE DATOS - CANGURO MATEMATICO

create database Canguro_DB;		#crear una base de datos
use Canguro_DB;					#usar base de datos


############ TABLAS
create table usuario(			
id_usuario int Primary Key,
rol varchar(50),
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




