-- ============================================
-- Base de datos: crud_productos
-- Proyecto: CRUD PHP + MySQL
-- ============================================

CREATE DATABASE IF NOT EXISTS crud_productos;

USE crud_productos;

-- ============================================
-- Tabla: productos
-- ============================================

CREATE TABLE IF NOT EXISTS productos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    fecha DATE DEFAULT NULL,
    hora TIME DEFAULT NULL,
    PRIMARY KEY (id)
);

-- ============================================
-- Datos de ejemplo
-- ============================================

INSERT INTO productos (nombre, precio, fecha, hora) VALUES
('Remera rosa', 15000.00, NULL, NULL),
('Remera blanca', 13500.00, NULL, NULL),
('Pantalón negro', 28000.00, NULL, NULL),
('Vestido rosa', 45000.00, NULL, NULL);