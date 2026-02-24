<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

// Obtener vehículos
$stmt = $pdo->query("SELECT * FROM vehiculos ORDER BY vehiculo_id ASC");
$vehiculos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos – Automovilismo 2026</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

            /* Fondo Porsche GT3 RS negro */
            background-image: url('https://external-preview.redd.it/2027-porsche-911-gt2-rs-spied-750-800bhp-comeback-v0-8cpjWjCHG38jvNtWpmanRX7uD4foMs1hVhSUVrFrgLY.jpg?width=640&crop=smart&auto=webp&s=bbb731cdd3b6235ec54f8edf385a8d6207b8ede3');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            backdrop-filter: blur(3px);
        }

        .overlay {
            background: rgba(0, 0, 0, 0.78);
            min-height: 100vh;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #ff3b3b;
            font-size: 38px;
            letter-spacing: 3px;
            text-shadow: 0 0 10px #ff0000;
            margin-bottom: 30px;
        }

        .top-bar {
            text-align: center;
            margin-bottom: 25px;
            color: white;
            font-size: 18px;
        }

        .top-bar a {
            color: #ff3b3b;
            text-decoration: none;
            font-weight: bold;
        }

        .top-bar a:hover {
            text-decoration: underline;
        }

        .btn-add {
            display: inline-block;
            background: #ff3b3b;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.2s;
            margin-bottom: 20px;
        }

        .btn-add:hover {
            background: #ff1a1a;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(20, 20, 20, 0.85);
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background: #ff3b3b;
            padding: 12px;
            font-size: 16px;
            letter-spacing: 1px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        tr:hover {
            background: rgba(255, 0, 0, 0.15);
        }

        a.action {
            color: #ff3b3b;
            text-decoration: none;
            font-weight: bold;
        }

        a.action:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="overlay">

    <h1>Vehículos – Automovilismo 2026</h1>

    <div class="top-bar">
        Bienvenido, <strong><?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></strong> |
        <a href="logout.php">Cerrar sesión</a>
    </div>

    <div style="text-align:center;">
        <a class="btn-add" href="add.php">➕ Añadir nuevo vehículo</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Potencia</th>
            <th>Categoría</th>
            <th>VIN</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($vehiculos as $v): ?>
            <tr>
                <td><?php echo $v['vehiculo_id']; ?></td>
                <td><?php echo htmlspecialchars($v['marca']); ?></td>
                <td><?php echo htmlspecialchars($v['modelo']); ?></td>
                <td><?php echo $v['anio']; ?></td>
                <td><?php echo $v['potencia']; ?> CV</td>
                <td><?php echo htmlspecialchars($v['categoria']); ?></td>
                <td><?php echo htmlspecialchars($v['vin']); ?></td>
                <td>
                    <a class="action" href="edit.php?id=<?php echo $v['vehiculo_id']; ?>">Editar</a> |
                    <a class="action" href="delete.php?id=<?php echo $v['vehiculo_id']; ?>"
                       onclick="return confirm('¿Seguro que quieres eliminar este vehículo?');">
                       Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>
