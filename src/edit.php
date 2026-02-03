<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

$id = (int)($_GET['id'] ?? 0);
if ($id <= 0) {
    die('ID inválido.');
}

$stmt = $pdo->prepare("SELECT * FROM vehiculos WHERE vehiculo_id = ?");
$stmt->execute([$id]);
$vehiculo = $stmt->fetch();

if (!$vehiculo) {
    die('Vehículo no encontrado.');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar vehículo</title>
</head>
<body>
    <h1>Editar vehículo #<?php echo $vehiculo['vehiculo_id']; ?></h1>
    <p><a href="home.php">Volver al listado</a></p>

    <form action="edit_action.php?id=<?php echo $vehiculo['vehiculo_id']; ?>" method="post">
        <label>Marca:</label><br>
        <input type="text" name="marca" value="<?php echo htmlspecialchars($vehiculo['marca']); ?>" required><br><br>

        <label>Modelo:</label><br>
        <input type="text" name="modelo" value="<?php echo htmlspecialchars($vehiculo['modelo']); ?>" required><br><br>

        <label>Año:</label><br>
        <input type="number" name="anio" value="<?php echo $vehiculo['anio']; ?>" required><br><br>

        <label>Potencia (CV):</label><br>
        <input type="number" name="potencia" value="<?php echo $vehiculo['potencia']; ?>" required><br><br>

        <label>Categoría:</label><br>
        <input type="text" name="categoria" value="<?php echo htmlspecialchars($vehiculo['categoria']); ?>" required><br><br>

        <label>VIN:</label><br>
        <input type="text" name="vin" value="<?php echo htmlspecialchars($vehiculo['vin']); ?>" required><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
