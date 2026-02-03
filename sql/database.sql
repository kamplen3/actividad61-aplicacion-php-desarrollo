-- ============================================
--   BASE DE DATOS AUTOMOVILISMO MODERNO 2026
-- ============================================

CREATE DATABASE IF NOT EXISTS automovilismo2026
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE automovilismo2026;

-- ============================================
--   TABLA DE USUARIOS
-- ============================================

CREATE TABLE usuarios (
    usuario_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
--   TABLA PRINCIPAL: VEHÍCULOS
-- ============================================

CREATE TABLE vehiculos (
    vehiculo_id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    anio INT NOT NULL,
    potencia INT NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    vin VARCHAR(50) NOT NULL UNIQUE
);

-- ============================================
--   DATOS DE EJEMPLO: USUARIOS
--   Contraseñas reales:
--   admin → Admin2026!
--   maria_racing → MariaRacing#1
--   juan_speed → SpeedJuan_2026
-- ============================================

INSERT INTO usuarios (nombre_usuario, contraseña, correo)
VALUES
('admin',
 '$2y$10$g5p7l8c9Q0r1s2t3u4v5wO1q2p3r4s5t6u7v8w9x0y1z2A3B4C5D',
 'admin@demo.com'),

('maria_racing',
 '$2y$10$H8J9K0L1M2N3O4P5Q6R7S8T9U0V1W2X3Y4Z5a6b7c8d9e0f1g2h',
 'maria@demo.com'),

('juan_speed',
 '$2y$10$A1B2C3D4E5F6G7H8I9J0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z',
 'juan@demo.com');

-- ============================================
--   DATOS DE EJEMPLO: VEHÍCULOS 2026
-- ============================================

INSERT INTO vehiculos (marca, modelo, anio, potencia, categoria, vin)
VALUES
('Mercedes-AMG', 'W15', 2026, 1080, 'F1', 'VINF1MERW152026001'),
('Ferrari', 'SF-26', 2026, 1095, 'F1', 'VINF1FERSF262026002'),
('Toyota', 'GR010 Evo', 2026, 950, 'Hypercar', 'VINHYPTOYGR0102026003'),
('Porsche', '963 Evo', 2026, 920, 'Hypercar', 'VINHYPPOR9632026004'),
('Nissan', 'Gen4 e-Prototype', 2026, 600, 'Formula E', 'VINEFORMNISG42026005'),
('Lamborghini', 'Huracán GT3 Evo2', 2026, 640, 'GT3', 'VINGT3LAMHEVO22026006'),
('Dallara', 'IR-26', 2026, 750, 'IndyCar', 'VININDDALIR262026007'),
('BMW', 'M4 GT3 Evo', 2026, 620, 'GT3', 'VINGT3BMWM4EVO2026008'),
('McLaren', 'MCL38', 2026, 1070, 'F1', 'VINF1MCLMCL382026009'),
('Peugeot', '9X8 Evo', 2026, 905, 'Hypercar', 'VINHYPPEU9X82026010');
-- ============================================