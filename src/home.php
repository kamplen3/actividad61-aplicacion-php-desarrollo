<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

// Obtener todos los vehículos
$stmt = $pdo->query("SELECT * FROM vehiculos ORDER BY vehiculo_id DESC");
$vehiculos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos – Automovilismo 2026</title>
</head>
<body>
    <h1>Vehículos – Automovilismo moderno 2026</h1>
    <p>Hola, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?> |
       <a href="logout.php">Cerrar sesión</a></p>

    <p><a href="add.php">Añadir nuevo vehículo</a></p>

    <table border="1" cellpadding="5" cellspacing="0">
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
                <td><?php echo $v['potencia']; ?></td>
                <td><?php echo htmlspecialchars($v['categoria']); ?></td>
                <td><?php echo htmlspecialchars($v['vin']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $v['vehiculo_id']; ?>">Editar</a> |
                    <a href="delete.php?id=<?php echo $v['vehiculo_id']; ?>"
                       onclick="return confirm('¿Seguro que quieres eliminar este vehículo?');">
                       Eliminar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
