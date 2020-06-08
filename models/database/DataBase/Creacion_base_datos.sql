create database diverpark;
use diverpark;

create table tipo_documento
(
    id_tipodoc VARCHAR(10),
	siglas VARCHAR(5)  not null,
	nombre_tipo_doc VARCHAR(45)  not null
);

create table usuario
(
    numero_documento varchar(25),
    fk_id_tipodoc VARCHAR(10),
    primer_nombre varchar(25) not null,
    segundo_nombre varchar(25),
    primer_apellido varchar(25) not null,
    segundo_apellido varchar(25),
    departamento varchar(25)not null,
    ciudad varchar (25) not null,
    direccion varchar(25) not null,
    avatar blob,
    email VARCHAR (30) unique not null,
    contraseña VARCHAR(15) not null,
    telefono bigint not null,
    fk_id_rol int,
    fk_id_producto int
);

create table rol
(
    id_rol int primary key auto_increment,
    nombre_rol VARCHAR (25)  not null,
    descripcion varchar(150)
);

create table tipo_producto
(
	id_producto int primary key auto_increment,
    nomb_producto varchar (25) not null,
    imagen_park blob,
    tamaño varchar(30),
    descripcion varchar(100) not null,
    precio float not null,
    fk_id_numero_documento varchar (25),
    fk2_id_tipodoc varchar (10)
    );
   
    
    create table servicio
(
	id_servicio int primary key auto_increment,
    nombre_servicio varchar (50) not null,
	fecha date not null,
    direccion varchar (25) not null,
	observacion varchar (150),
    fk_id_producto int
);

create table tipo_pago
(
    id_tpago int primary key auto_increment,
    siglas varchar (5),
    nombre_tipo_pago VARCHAR(30)  not null
	/*fk_id_tarjeta_c VARCHAR(10),
    fk_id_tarjeta_d VARCHAR(10),
    fk_id_giro VARCHAR(10)*/
);

create table factura
(
	id_factura int primary key auto_increment ,
    cod_producto varchar (10) not null,
    nombre_producto varchar (30) not null,
    cantidad_uds int not null,
    valor_unidad float  not null, 
    iva_unidad float  not null, 
    sub_total float  not null, 
    total float  not null, 
    fecha datetime not null,
	fk_id_tpago int,
    fk2_id_producto int,
    fk_numero_documento varchar(25)
);


create table tarjeta_credito
(
    id_tarjeta_c int auto_increment primary key,
    nombre VARCHAR(25) not null,
    apellido VARCHAR(25)  not null,
    nombre_banco varchar (25) not null,
    numero_de_tarjeta BIGINT,
    codigo_seguridad int,
    fecha_vencimiento date,
    fk_id_tpago int
);

create table tarjeta_debito
(
    id_tarjeta_d int auto_increment primary key,
    nombre VARCHAR(25) not null,
    apellido VARCHAR(25) not null,
    nombre_banco varchar (25) not null,
    numero_de_tarjeta BIGINT not null,
    codigo_seguridad int not null,
    fecha_vencimiento date not null,
    fk_id_tpago int
);

create table giro_empresarial
(
    id_giro int auto_increment primary key,
    nombre_titular varchar (25)not null,
    apellido_titular varchar (25)not null,
    documento_titular varchar (25)not null,
    numero_telefono BIGINT not null,    
    valor_giro float not null,
    fk_id_tpago int
);


create table envio
(
	id_envio int auto_increment primary key,
    departamento varchar(25)not null,
    ciudad varchar (25) not null,
    direccion_envio varchar (30) not null,
    fecha_envio date not null,
    fk_id_factura int
);


/*create table instalacion_parque 
(
	id_instalacion int auto_increment primary key,
    fecha_instalacion date not null,
    direccion_instalacion varchar (25) not null,
	observacion varchar (50),
    fk_id_servicio int
);

create table mantenimiento_parque 
(
	id_mantenimiento int auto_increment primary key,
    fecha_mantenimiento date not null,
    direccion_paruqe varchar (25) not null,
	observacion varchar (50),
	fk_id_servicio  int 
);*/

create table error 
(
	id_error int auto_increment primary key,
    nombre_error varchar (50),
	descripcion varchar (100)
);


create table servidor_correo
(
	id_serv_correo int auto_increment primary key,
    nombre_serv_correo varchar (30)
);

-- =================== AGREGAR LLAVES PRIMARIAS FORANEAS Y RELACIONES================

-- se definen llaves primarias de tipo_documento y usuario, tambien foranea usuario -tipo_documento
ALTER TABLE tipo_documento ADD primary key (id_tipodoc);
ALTER TABLE usuario ADD constraint FOREIGN KEY (fk_id_tipodoc)REFERENCES tipo_documento(id_tipodoc);
ALTER TABLE usuario ADD primary key (numero_documento, fk_id_tipodoc);

-- rol definen las  llaves primaria y foranea de la tabla 
-- ALTER TABLE rol ADD primary key (id_rol);
ALTER TABLE usuario ADD constraint FOREIGN KEY (fk_id_rol)REFERENCES rol(id_rol);

--  - tipo_producto   define las  llaves  foraneas de la tabla 
alter table tipo_producto  add constraint foreign key (fk_id_numero_documento,fk2_id_tipodoc) references usuario(numero_documento,fk_id_tipodoc );

--  - factura - tipo producto  define las  llaves  foraneas de la tabla 
alter table factura add constraint foreign key (fk2_id_producto) references tipo_producto(id_producto);
alter table factura add constraint foreign key (fk_numero_documento) references usuario (numero_documento);

--  - servicio - tipo producto   define las  llaves  foraneas de la tabla 
alter table servicio add constraint foreign key (fk_id_producto) references tipo_producto(id_producto);

-- tipo_pago- factura  definen las  llaves primaria y foranea de la tabla 
alter table factura add constraint foreign key (fk_id_tpago) references tipo_pago (id_tpago);

-- tarjeta_credito  definen las  llaves primaria y foranea de la tabla 
ALTER TABLE tarjeta_credito ADD constraint FOREIGN KEY (fk_id_tpago) references tipo_pago (id_tpago);

-- tarjeta_debito definen las  llaves primaria y foranea de la tabla
ALTER TABLE tarjeta_debito ADD constraint FOREIGN KEY (fk_id_tpago) references tipo_pago (id_tpago);

-- efectivo definen las  llaves primaria y foranea de la tabla
ALTER TABLE giro_empresarial ADD constraint FOREIGN KEY (fk_id_tpago) references tipo_pago (id_tpago);

-- envio definen las  llaves primaria y foranea de la tabla
ALTER TABLE envio ADD constraint FOREIGN KEY (fk_id_factura)REFERENCES factura(id_factura);

select * from usuario;
