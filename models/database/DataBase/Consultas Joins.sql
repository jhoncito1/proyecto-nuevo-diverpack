-- drop database diverpark;
use diverpark;

-- 1. Reporte de ventas
SELECT nombre_producto PRODUCTO, SUM(cantidad_uds) VENDIDO, sum(total) REPORTE_VENTAS 
FROM factura
GROUP BY nombre_producto
ORDER BY VENDIDO asc;

-- 2. Productos vendidos y datos del cliente que hace la compra
select numero_documento Identificacion , primer_nombre Nombre, primer_apellido Apellido, nombre_producto Producto
from factura f 
join usuario us
on f.fk_numero_documento = us.numero_documento;

-- 3. Tipo de pago preferido
SELECT nombre_tipo_pago, count(nombre_tipo_pago)
FROM factura f
join tipo_pago tp on f.fk_id_tpago = tp.id_tpago
join usuario u on f.fk_numero_documento = u.numero_documento
GROUP  BY id_tpago
ORDER  BY primer_nombre DESC;



-- 4. Categoría de productos que tiene mayores ventas
SELECT nombre_producto PRODUCTO, SUM(cantidad_uds) VENDIDO
FROM factura
GROUP  BY nombre_producto
ORDER  BY VENDIDO DESC;

-- 5. Número de usarios registrados - order by
select primer_apellido, segundo_apellido, primer_nombre 
from usuario order by primer_apellido asc ;

-- 6. Producto más vendido
SELECT nombre_producto PRODUCTO, SUM(cantidad_uds) VENDIDO
FROM factura
GROUP  BY nombre_producto
ORDER  BY VENDIDO DESC;

-- 7. Iventario de productos
select id_producto, nomb_producto, tamaño, descripcion from tipo_producto;

-- 8. Los usuarios con más compras realizadas
SELECT primer_apellido, segundo_apellido, primer_nombre, count(numero_documento) compras_realizadas
FROM factura f
join usuario u on f.fk_numero_documento = u.numero_documento
GROUP  BY numero_documento
ORDER  BY (count(numero_documento)) desc;


-- 9. Usuario con la compra de mayor valor
select numero_documento Identificacion , primer_nombre Nombre, primer_apellido Apellido, nombre_producto Producto,SUM((valor_unidad + iva_unidad)*cantidad_uds) compras
from factura f 
join usuario us on f.fk_numero_documento = us.numero_documento
GROUP  BY Identificacion
ORDER  BY compras DESC;


/*select numero_documento, primer_apellido, primer_nombre, nombre_producto, max(total)
from factura f
join usuario us
on f.fk_numero_documento = us.numero_documento;*/

-- 10. Usuarios registrados con tipo de documento diferente de "CC"
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, siglas
from usuario us
join tipo_documento tp
on us.fk_id_tipodoc = tp.id_tipodoc where tp.siglas <> 'CC';


-- 11. Ventas por ciudad o localidad
select id_factura, primer_apellido, primer_nombre, nombre_producto, ciudad
from factura f
join usuario us
on f.fk_numero_documento = us.numero_documento;
-- 12. Usuarios por departamento o ciudad
select primer_nombre, primer_apellido, segundo_apellido, departamento, ciudad
from usuario where departamento = 'tolima';

-- 13. Facturas donde se evidencia cliente, compra, valor, fecha, hora (editado) 
select id_factura, fk_numero_documento, primer_apellido, primer_nombre, nombre_producto, total, fecha
from factura f
join usuario us
on f.fk_numero_documento = us.numero_documento;







/*
--  10. Nombres, apellidos y tipo de pago con el que adquirió el plan
select primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, siglas
from usuario us 
join tipo_producto tp on tp.fk_id_numero_documento = us.numero_documento
join factura f on f.fk_id_producto = tp.id_producto
join tipo_pago tpa on f.fk_id_tpago = tpa.id_tpago ;*/