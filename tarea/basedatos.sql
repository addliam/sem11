CREATE DATABASE tienda;

USE tienda;

CREATE TABLE transacciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio_unitario DECIMAL(10, 2),
    cantidad INT,
    subtotal DECIMAL(10, 2),
    igv DECIMAL(10, 2),
    total DECIMAL(10, 2),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO transacciones (producto, precio_unitario, cantidad, subtotal, igv, total) 
VALUES 
('Laptop', 1500.00, 1, 1500.00, 270.00, 1770.00),
('Mouse inalámbrico', 25.00, 2, 50.00, 9.00, 59.00),
('Escritorio ergonómico', 350.00, 3, 1050.00, 189.00, 1239.00);
