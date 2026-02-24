# 🚗 Automovilismo 2026 – Aplicación CRUD en PHP + MariaDB + Docker

Aplicación web CRUD desarrollada en **PHP 8.2**, utilizando **MariaDB 11** como base de datos y **Docker** para la contenedorización completa del entorno.  
Permite gestionar usuarios y vehículos de automovilismo moderno (año 2026).

---

## 📦 Tecnologías utilizadas

- PHP 8.2 + Apache  
- MariaDB 11  
- Docker & Docker Compose  
- PDO (PHP Data Objects)  
- HTML5 + CSS básico  
- Sesiones para autenticación  

---

## 📁 Estructura del proyecto

```
conf/
 └── 000-default.conf
docker-compose.yml
Dockerfile
.env
sql/
 └── database.sql
src/
 ├── add.php
 ├── add_action.php
 ├── config.php
 ├── delete.php
 ├── edit.php
 ├── edit_action.php
 ├── home.php
 ├── index.php
 ├── login.php
 ├── login_action.php
 ├── logout.php
 ├── registro.php
 └── registro_action.php
```

---

## 🗄 Base de datos

El archivo `sql/database.sql` crea:

### Tabla `usuarios`
- `usuario_id` (PK)
- `nombre_usuario`
- `contraseña` (hash bcrypt)
- `correo` (UNIQUE)
- `creacion` (timestamp)

### Tabla `vehiculos`
- `vehiculo_id` (PK)
- `marca`
- `modelo`
- `anio`
- `potencia`
- `categoria`
- `vin` (UNIQUE)

Incluye datos de ejemplo para ambas tablas.

---

## ⚙️ Configuración del entorno

### 1. Crear archivo `.env`

Debe estar en la raíz del proyecto:

```env
MYSQL_ROOT_PASSWORD=SamuelSaez@2006
MYSQL_DATABASE=automovilismo2026
MYSQL_USER=usuarioSaSa
MYSQL_PASSWORD=SamuelSaez@2006
```

## ▶️ Puesta en marcha

Ejecuta:

```bash
docker-compose up --build
```

Esto levantará:

- Contenedor **MariaDB**
- Contenedor **PHP + Apache**
- Inicialización automática de la base de datos con datos de ejemplo

Accede a la aplicación en:

```
http://35.174.72.31/ (Desarrollo)
```

```
http://52.200.98.147/ (Producción)
```

---

## 🔐 Usuarios de prueba

| Usuario        | Correo           | Contraseña        |
|----------------|------------------|-------------------|
| admin          | admin@admin.com  | 12345             |
| maria_racing   | maria@usuario.com| 12345             |
| juan_speed     | juan@usuario.com | 12345             |

---

## 🧩 Funcionalidades

### ✔ Autenticación
- Registro de usuarios  
- Inicio de sesión  
- Cierre de sesión  
- Protección de rutas mediante sesiones  

### ✔ CRUD de vehículos
- Crear vehículos  
- Listar vehículos  
- Editar vehículos  
- Eliminar vehículos  

---

Reiniciar todo desde cero (incluye borrar volúmenes):

```bash
docker-compose down -v
docker-compose up --build
```

Ver logs:

```bash
docker-compose logs -f
```

---
