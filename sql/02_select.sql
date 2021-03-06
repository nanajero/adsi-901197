# Consultar todos los registos
SELECT * FROM clientes;

# Consultar columnas especificas
SELECT direccion FROM clientes;

SELECT nombres, ciudad FROM clientes;

# Consultar valores distintos (No se repiten)
SELECT DISTINCT ciudad FROM clientes;


# (WHERE)
# Consultas dependiendo una condición
SELECT * FROM clientes WHERE ciudad = 'Manizales';

SELECT nombres, direccion FROM clientes WHERE documento > 75000004;


# (AND / OR)
# Seleccionar con Operadores Lógicos
SELECT * FROM clientes WHERE ciudad = 'Manizales' AND documento > 75000004;

SELECT * FROM clientes WHERE ( ciudad = 'Manizales' OR ciudad = 'Armenia' ) AND documento > 75000004;


# (ORDER BY)
# Ordernar de forma ascendente 
SELECT * FROM clientes ORDER BY ciudad ASC;

# Ordernar de forma descendente 
SELECT nombres, documento FROM clientes ORDER BY documento DESC;


# (LIMIT / OFFSET)
# Limitar el número de registros que se van a mostrar
SELECT * from clientes LIMIT 3;

# Limitar el número de registros desde un registro determinado
SELECT * from clientes LIMIT 4 OFFSET 2;

SELECT * from clientes LIMIT 2,4;


# (LIKE)
# Buscar registros
SELECT * FROM clientes WHERE nombres LIKE '%ma%';

SELECT * FROM clientes WHERE nombres LIKE 'ma%'; # Al comienzo

SELECT * FROM clientes WHERE nombres LIKE '%on'; # Al final

SELECT * FROM clientes WHERE ciudad LIKE 'c_l_'; # Completar


# (IN)
# Seleccionar multiples valores de una columna
SELECT * FROM clientes WHERE ciudad IN ('Manizales', 'Pereira');


# (BETWEEN / NOT BETWEEN)
SELECT * FROM clientes WHERE documento BETWEEN 75000004 AND 75000008;

SELECT * FROM clientes WHERE documento NOT BETWEEN 75000003 AND 75000010;


# (ALIAS)
SELECT c.*, cr.fecha, cr.total 
FROM clientes AS c, compras AS cr
WHERE cr.cliente_id = c.documento;

SELECT c.*, cr.*
FROM clientes AS c, compras AS cr
WHERE cr.cliente_id = c.documento;
