CREATE DATABASE almacen;

USE almacen;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(20) NOT NULL,
    descripcion TINYTEXT NOT NULL,
    inventariable TINYINT(4) NOT NULL,
    stock INT(11) NOT NULL,
    activo TINYINT(4) NOT NULL
);
INSERT INTO productos (codigo, descripcion, inventariable, stock, activo) 
VALUES 
('P001', 'Laptop Dell Inspiron', 1, 15, 1),
('P002', 'Mouse Inalámbrico', 1, 50, 1),
('P003', 'Teclado Mecánico', 1, 20, 1),
('P004', 'Monitor LG 24 pulgadas', 1, 10, 1),
('P005', 'Escritorio de Madera', 0, 5, 0);
