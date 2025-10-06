--
-- PostgreSQL database dump
--

-- CREACIÓN DE TABLAS
CREATE TABLE clientes (
    id_cliente SERIAL PRIMARY KEY,
    nombre TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL
);

CREATE TABLE productos (
    id_producto SERIAL PRIMARY KEY,
    nombre TEXT NOT NULL,
    precio NUMERIC(10,2) NOT NULL
);

CREATE TABLE ventas (
    id_venta SERIAL PRIMARY KEY,
    id_cliente INT REFERENCES clientes(id_cliente),
    id_producto INT REFERENCES productos(id_producto),
    cantidad INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERCIÓN DE DATOS
INSERT INTO clientes (nombre, email) VALUES
('Juan Pérez', 'juan@example.com'),
('Ana Torres', 'ana@example.com');

INSERT INTO productos (nombre, precio) VALUES
('Laptop', 850.00),
('Mouse', 20.00),
('Teclado', 45.00);

INSERT INTO ventas (id_cliente, id_producto, cantidad) VALUES
(1, 1, 1),  -- Juan compra una Laptop
(1, 2, 2),  -- Juan compra 2 Mouse
(2, 3, 1);  -- Ana compra un Teclado
