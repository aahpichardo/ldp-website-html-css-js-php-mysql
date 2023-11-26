DROP DATABASE luna_plata;
CREATE DATABASE luna_plata;
USE luna_plata;

drop table reservaciones;

CREATE TABLE reservaciones (
    id_cliente INT(40) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    numero_personas INT,
    fecha_entrada DATE,
    fecha_salida DATE,
    tipo_habitacion VARCHAR(50),
    costo_total DECIMAL(10, 2)
);


select * from reservaciones;


drop table restaurante;

CREATE TABLE restaurante (
    id INT(40) PRIMARY KEY AUTO_INCREMENT,
    nombre_cliente VARCHAR(30),
    fecha DATE,
    platillos VARCHAR(255),
    costo_total int(10)
);

select * from restaurante;

CREATE TABLE empleados (
    id INT(40) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    puesto VARCHAR(50),
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

select * from empleados;

