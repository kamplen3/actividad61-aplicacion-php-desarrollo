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
--   admin → 12345
--   maria_racing → 12345
--   juan_speed → 12345
-- ============================================

INSERT INTO usuarios (nombre_usuario, contraseña, correo)
VALUES
('admin',
 '$2y$10$leRyxU4L8nsxZdSypwvnzuUwccLmON3v1tsJAOIz7/F3bWabQoKfi',
 'admin@admin.com'),

('maria_racing',
 '$2y$10$leRyxU4L8nsxZdSypwvnzuUwccLmON3v1tsJAOIz7/F3bWabQoKfi',
 'maria@usuario.com'),

('juan_speed',
 '$2y$10$leRyxU4L8nsxZdSypwvnzuUwccLmON3v1tsJAOIz7/F3bWabQoKfi',
 'juan@usuario.com');

-- ============================================
--   DATOS DE EJEMPLO: VEHÍCULOS 2026
-- ============================================

INSERT INTO vehiculos (marca, modelo, anio, potencia, categoria, vin)
VALUES
('Mercedes-AMG', 'W15', 2026, 1080, 'F1', 'VINF1MERW152026001'),
('Ferrari', 'SF-26', 2026, 1095, 'F1', 'VINF1FERSF262026002'),
('Toyota', 'GR010 Evo', 2026, 950, 'Hypercar', 'VINHYPTOYGR0102026003'),
('Porsche', '963 Evo', 2026, 920, 'Hypercar', 'VINHYPPOR9632026004'),
('Audi', 'R18 e-tron Quattro', 2026, 880, 'Hybrid LMP1', 'VINHYPAUDR18E2026005'),
('Lamborghini', 'Huracán GT3 Evo2', 2026, 640, 'GT3', 'VINGT3LAMHEVO22026006'),
('Dallara', 'IR-26', 2026, 750, 'IndyCar', 'VININDDALIR262026007'),
('BMW', 'M4 GT3 Evo', 2026, 620, 'GT3', 'VINGT3BMWM4EVO2026008'),
('McLaren', 'MCL38', 2026, 1070, 'F1', 'VINF1MCLMCL382026009'),
('Peugeot', '9X8 Evo', 2026, 905, 'Hypercar', 'VINHYPPEU9X82026010'),
('Porsche', '911 GT3 RS', 2026, 525, 'Street', 'VIN2026STRPORGT3RS011'),
('Lamborghini', 'Revuelto', 2026, 1015, 'Street', 'VIN2026STRLAMREV012'),
('Ferrari', '812 Competizione', 2026, 830, 'Street', 'VIN2026STRFER812013'),
('Chevrolet', 'Corvette Z06', 2026, 670, 'Street', 'VIN2026STRCHVCORZ0614'),
('McLaren', '765LT', 2026, 755, 'Street', 'VIN2026STRMCL765014'),
('Aston Martin', 'Valkyrie AMR Pro', 2026, 1160, 'Street', 'VIN2026STRAMVKR015'),
('Bugatti', 'Chiron Super Sport', 2026, 1600, 'Street', 'VIN2026STRBUGCSS016'),
('Koenigsegg', 'Jesko Attack', 2026, 1600, 'Street', 'VIN2026STRKNGJSK017'),
('Pagani', 'Huayra R Evo', 2026, 900, 'Street', 'VIN2026STRPGNHRE018'),
('BMW', 'M5 CS', 2026, 635, 'Street', 'VIN2026STRBMWM5CS019'),
('Audi', 'R8 GT Final Edition', 2026, 620, 'Street', 'VIN2026STRAUDR8GT020'),
('CyberRacer', 'X-99 Plasma', 2026, 1450, 'Prototype', 'VIN2026CYBX99P021'),
('NovaSpeed', 'HyperFlux R', 2026, 1320, 'Prototype', 'VIN2026NVSFLUX022'),
('Quantum Motors', 'QX-1 Velocity', 2026, 1100, 'Hypercar', 'VIN2026QTMQVLY023'),
('Eclipse Engineering', 'Eclipse GT-X', 2026, 980, 'Hybrid GT', 'VIN2026ECLGTX024'),
('Titan Racing', 'TR-900 Apex', 2026, 900, 'GT3', 'VIN2026TRAPX90025'),
('Solaris', 'Helios GT', 2026, 850, 'Hybrid GT', 'VIN2026SLRHEL026'),
('Vulcan', 'Inferno R', 2026, 1200, 'Hypercar', 'VIN2026VLCINF027'),
('Nebula', 'StormBlade', 2026, 1000, 'Prototype', 'VIN2026NBLSB028'),
('StratoSpeed', 'SS-5000', 2026, 1150, 'Hypercar', 'VIN2026SS5000029'),
('Falcon Motors', 'FM-X1', 2026, 1050, 'Prototype', 'VIN2026FLX10030'),
('Omega', 'Phantom GT-X', 2026, 1400, 'Hypercar', 'VIN2026OMGPHX030');
-- ============================================