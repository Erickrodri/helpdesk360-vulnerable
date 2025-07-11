
CREATE DATABASE IF NOT EXISTS tickets;
USE tickets;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
INSERT INTO users (username, password) VALUES
('admin', 'admin123'),
('usuario', 'usuario123'),
('flaguser', 'FLAG{SQLI_OWNED}');
CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    mensaje TEXT
);
INSERT INTO tickets (titulo, mensaje) VALUES
('Problema con impresora', 'No imprime desde ayer.'),
('Error del sistema', 'Pantalla azul al encender.'),
('Prueba XSS', '<script>alert("XSS")</script>');
