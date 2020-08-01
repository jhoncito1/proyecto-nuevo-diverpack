-- drop database diverpark;
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
	id_user  int primary key auto_increment,
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
    password VARCHAR(100) not null,
    telefono bigint not null,
    fk_id_rol int,
    estado int,
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
    fk_id_user int
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
    fk_id_user int
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
-- ALTER TABLE usuario ADD primary key (numero_documento, fk_id_tipodoc);

-- rol definen las  llaves primaria y foranea de la tabla 
-- ALTER TABLE rol ADD primary key (id_rol);
ALTER TABLE usuario ADD constraint FOREIGN KEY (fk_id_rol)REFERENCES rol(id_rol);

--  - tipo_producto   define las  llaves  foraneas de la tabla 
alter table tipo_producto  add constraint foreign key (fk_id_user) references usuario(id_user);

--  - factura - tipo producto  define las  llaves  foraneas de la tabla 
alter table factura add constraint foreign key (fk2_id_producto) references tipo_producto(id_producto);
alter table factura add constraint foreign key (fk_id_user) references usuario (id_user);

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


insert into tipo_documento -- (id_tipodoc, siglas, nombre_tipo_doc)
values 
(1, 'CC', 'cedula de ciudadania'),
(2, 'CE', 'cedula de extranjera'),
(3, 'NIT', 'numero identificacion tributaria'),
(4, 'PPS', 'tarjeta pasaporte');

-- Inserción de datos tabla usuario
insert into rol -- (id_rol, nombre_rol, descripcion)
values 
('1', 'administrador', 'el administrador podra crear, eliminar o modificar ya sean productos, servicios o usuarios'),
('2', 'cliente', 'el cliente podra visualizar productos crear su usuario y modificarlo ademas podra adquirir los productos y servicios ofrecidos por la empresa'),
('3', 'visitante', 'el visitante podra solo visualizar los productos y servicios');

-- Inserción de datos tabla usuario

insert into usuario -- (numero_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, departamento, ciudad, direccion, email, contraseña, telefono, fk_id_rol, fk_id_documento, fk_id_producto)
values 
(1,'1013614965', '1', 'nicole', 'camila', 'ramirez', 'montero', 'cundinamarca', 'zipaquira', 'cra. 79# 57-86',null, 'ncamila@gmail.com', 'buybdf***5', 7584956,'2',1,1),
(2,'1030525932', '3', 'Cristian', 'David', 'Zapata', 'Moreno', 'cundinamarca', 'Bogata', 'cra. 67# 38-86',null, 'criszapata@gmail.com', 'tyrea827eh', 5973329,'2',1,1),
(3,'39665219', '4', 'Luz', 'Edilma', 'Perez', 'Vargas', 'Antioquia', 'Medellin', 'cll. 18# 56-76',null, 'Lucesita23@gmail.com', 'byryaqo', 7810082,'2',1,1),
(4,'6034072', '1', 'Pablo', 'Deibi', 'Rincon', 'Rodriguez', 'tolima', 'Chaparral', 'transv. 4# 10-85',null, 'pablito2672@gmail.com', 'thanyrwip', 2333213,'2',1,1),
(5,'jng614693', '4', 'Jhohana', 'Patricia', 'Maldonado', 'Suarez', 'Caqueta', 'Florencia', 'Diag. 54# 23-45',null, 'jhpatricia@gmail.com', 'uytvhgdfs5', 5903615,'2',1,1),
(6,'1013414265', '2', 'Andres', 'Yesid', 'Rios', 'Sanchez', 'casanare', 'yopal', 'cra. 24# 65-04',null, 'yiyo234@gmail.com', 'buf**uyhsbb', 5735218,'2',1,1),
(7,'1032178543', '2', 'Heidy', 'Julied', 'Moreno', 'Niampira', 'sucre', 'Sincelejo', 'cra. 27# 34-16',null, 'julied1232@gmail.com', 'ytrgujs***5', 7427189,'2',1,1),
(8,'1013724962', '2', 'Jeison', 'David', 'Marquez', 'Gomez', 'Cordoba', 'Monteria', 'cra. 39# 17-83',null, 'jdmarquez@gmail.com', 'bytbf***5', 6789546,'2',1,1),
(9,'1012534897', '1', 'Mary', 'Elizabeth', 'Orjuela', 'Moreno', 'valle del cauca', 'cali', 'transv. 49# 67-49',null, 'meormo.245@gmail.com', 'nursf***5', 3476523,'2',1,1),
(10,'38666852', '3', 'Juan', '', 'Alban', 'Giraldo', 'Tolima', 'Ibague', 'cra. 65# 42-33',null, 'juanitoalgi@gmail.com', 'jjuantye', 7549904,'2',1,0),
(11,'1025476897', '1', 'Laura', 'Vanessa', 'Rojas', '', 'cundinamarca', 'Girardot', 'dig. 67# 87-73',null, 'Laurisvanr@gmail.com', '2789unealkj', 2357682,'2',1,1),
(12,'1056825762', '1', 'Ronald', 'Alfredo', 'Leiton', 'Hurtado', 'Risaralda', 'Pereira', 'cra. 68 cbis# 37 a-96',null, 'Ronaldleiton@gmail.com', 'kshuitytabj', 6820056,'2',1,1),
(13,'e-25614965', '3', 'Leidy', 'Johanna', 'Rozo', 'Cubillos', 'Caldas', 'Manizales', 'cra. 21 sur# 67-79',null, 'cubilloslj@gmail.com', 'yegtreqw3456', 8643267,'2',1,1),
(14,'1065789076', '2', 'camilo', '', 'Gomez', '', 'Boyaca', 'Tunja', 'cll. 32# 97-64 sur',null, 'camiGomez4532@gmail.com', 'cristiabyv', 5987356,'2',1,0),
(15,'1013654762', '1', 'Angie', 'Liliana', 'Zambrano', 'Suares', 'Tolima', 'Melgar', 'calle. 02 este# 67-63',null, 'anlilianita.217@gmail.com', 'Liliana2765', 3176542,'2',1,1);

insert into tipo_producto
values
(1,'Parques de madera', null, '25 * 5 *8', 'thjuf ebdfbddhgaau cfhhudr', 1000000,3),
(2,'Parques Metalicos', null, '20 *5 * 5 *8', 'thjuf ebdfbddhgaau cfhhudr', 2001000,5),
(3,'Parques Biosaludables', null, '10 * 5 *8 *8', 'uygtdfhffdds  vhgfdj  tf de frg jhgu ', 1000000,6),
(4,'Parques publicos', null, '5 * 5 *5 *5', 'thjuf ebdfbddhgaau cfhhudr', 1465000,8);

insert into servicio 
values
(1, 'instalacion de parques','2019-03-31', 'cra. 21 sur# 67-79','  ',02),
(2, 'mantenimiento de parques','2019-03-31', 'cra. 21 sur# 67-79','',03);


insert into tipo_pago
values
(1,'TC', 'tarjeta credito'),
(2,'T', 'tarjeta debito'),
(3,'GE', 'giro_empresarial');

insert into factura
values
(1, 'p-02','Parques Metalicos', 3, 1805000, 205000, 5415000, 6300000, '2019-08-31 16:19:59', 01, 02, 2),
(2, 'p-02','Parques Metalicos', 1, 1805000, 205000, 1805000, 2001000, '2020-02-11 17:19:59', 01, 02, 4),
(3, 'p-01','Parques de madera', 2, 910000, 90000, 1810000, 2000000, '2019-08-31 06:19:59', 03, 01, 5),
(4, 'p-03','Parques Biosaludables', 2, 950000, 50000, 1900000, 2000000, '2019-08-31 10:19:59', 03, 03, 4),
(5, 'p-01','Parques de madera', 4, 910000, 90000, 3640000, 4000000, '2019-08-31 10:19:59', 02, 01, 10),
(6, 'p-01','Parques de madera', 4, 910000, 90000, 3600000, 4000000, '2019-08-31 10:19:59', 01, 01, 11),
(7, 'p-04','Parques publicos', 1, 960000, 40000, 960000, 1000000, '2019-07-18 11:12:42', 02, 04, 5);


insert into tarjeta_credito
values 
('1', 'juan', 'galindo', 'Banco de Bogota', 456213457865, 2561, '2019-03-31','02' ),
('2', 'paola', 'acevedo','Banco caja social',  254861245367, 6543, '2018-07-11','01'),
('3', 'michael', 'restrepo','Banco Bancolombia',  546123547852, 4318, '2018-04-20','03'),
('4', 'gerardo', 'pardo','Banco Occidente',  542698234561, 5678,'2019-01-01','03'),
('5', 'viviana', 'mendez','Banco BBVA',  456213457865, 7645, '2019-02-07','01');

insert into tarjeta_debito
values 
('1', 'tobias', 'vargas','Banco caja social', 4512478634, 8765, '2019-03-31','03'),
('2', 'juan pablo', 'ricaute','Banco de Bogota', 4532186547, 7652, '2019-06-24','01'),
('3', 'falcao', 'vacca', 'Banco del Occidente', 9645213794, 3789, '2019-08-31','02'),
('4', 'yimmy', 'duque','Banco BBVA', 6357219435, 6524, '2019-05-11','01'),
('5', 'gabriela', 'rios','Banco Bancolombia',  463185475, 8675, '2019-04-15','02');

insert into giro_empresarial
values 
('1', 'Alberto jose', 'vargas', '4512478634', 0318765547, 100.000,'03'),
('2', 'Alberto jose', 'vargas', '4512478634', 0318765547, 500.000,'03'),
('3', 'Alberto jose', 'vargas', '4512478634', 0318765547, 800.000,'03'),
('4', 'Alberto jose', 'vargas', '4512478634', 0318765547, 300.000,'03'),
('5', 'Alberto jose', 'vargas', '4512478634', 0318765547, 300.000,'03');

-- truncate table envio;
insert into envio
values
(1, 'cundinamarca', 'zipaquira', 'cra. 79# 57-86', '2019-08-31', 0001 ),
(2, 'Tolima', 'Ibague', 'cra. 65# 42-33', '2019-10-24', 0002 ),
(3, 'valle del cauca', 'cali', 'transv. 49# 67-49', '2019-09-01', 0003 ),
(4, 'Cordoba', 'Monteria', 'cra. 39# 17-83', '2020-01-01', 0004 ),
(5, 'Boyaca', 'Tunja', 'cll. 32# 97-64 sur', '2019-12-31', 0005 ),
(6, 'Tolima', 'Melgar', 'calle. 02 este# 67-63', '2019-07-04', 0006 );

insert into servidor_correo
values
(1, 'gmail.com'),
(2, 'outlok.com');

insert into error
values
(1, 'no muesra opcion ciudad', 'iu dfsujdsfghadf kdfkgsjfs  drjhedrhajf fdidfi'),
(2, 'no cabe numero de telefono', 'iu dfsujdsfghadf kdfkgsjfs  drjhedrhajf fdidfi');

-- select * from envio;



select * from usuario;

