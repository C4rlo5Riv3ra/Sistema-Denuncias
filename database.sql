CREATE DATABASE IF NOT EXISTS denuncias_db;
USE denuncias_db;

CREATE TABLE IF NOT EXISTS denuncias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    ubicacion VARCHAR(255) NOT NULL,
    ciudadano VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    fecha DATE NOT NULL,
    estado ENUM('Pendiente', 'En proceso', 'Resuelto') DEFAULT 'Pendiente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO denuncias (titulo, descripcion, ubicacion, ciudadano, telefono, fecha, estado) VALUES
('Bache en calle principal', 'Un bache grande en la intersección de la avenida principal con la calle 5.', 'Calle Lora y Cordero 172', 'Juan Pérez', '123456789', '2024-10-10', 'Pendiente'),
('Recolección de basura retrasada', 'La recolección de basura en mi zona no se ha hecho desde hace una semana.', 'Calle Junin 1045', 'María López', '987654321', '2024-10-11', 'En proceso'),
('Árbol caído en parque', 'Un árbol se ha caído en el parque central y bloquea el paso.', 'Calle Balta 514', 'Pedro Sánchez', '456123789', '2024-10-12', 'Resuelto'),
('Luminaria rota', 'La farola de la esquina está rota y la calle está muy oscura.', 'Calle Arica 113', 'Ana Torres', '789321456', '2024-10-12', 'Pendiente'),
('Basura acumulada en parque', 'Hay basura acumulada cerca de los juegos infantiles en el parque San Martín.', 'Calle Leoncio Prado 172', 'Carlos Gómez', '321654987', '2024-10-13', 'En proceso');