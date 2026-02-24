<?php
session_start();
if (empty($_SESSION['usuario_id'])) { header('Location: login.php'); exit; }
require 'config.php';

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM vehiculos WHERE vehiculo_id=?");
$stmt->execute([$id]);
$vehiculo = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar vehículo</title>
<link rel="stylesheet" href="style.css">

<style>
body {
    background-image: url('https://images.unsplash.com/photo-1610465299996-7f24f8206dfa');
    margin: 0;
    padding: 0;
}

.fullscreen {
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.78);
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container {
    width: 600px;
    background: rgba(0,0,0,0.85);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255,0,0,0.4);
    border: 1px solid rgba(255,0,0,0.5);
    color: white;
}
</style>
</head>

<body>

<div class="fullscreen">
    <div class="form-container">
        <h1>Editar vehículo</h1>

        <form action="edit_action.php?id=<?= $vehiculo['vehiculo_id']; ?>" method="post">
            <label>Marca:</label>
            <input type="text" name="marca" value="<?= htmlspecialchars($vehiculo['marca']); ?>" required>

            <label>Modelo:</label>
            <input type="text" name="modelo" value="<?= htmlspecialchars($vehiculo['modelo']); ?>" required>

            <label>Año:</label>
            <input type="number" name="anio" value="<?= $vehiculo['anio']; ?>" required>

            <label>Potencia (CV):</label>
            <input type="number" name="potencia" value="<?= $vehiculo['potencia']; ?>" required>

            <label>Categoría:</label>
            <input type="text" name="categoria" value="<?= htmlspecialchars($vehiculo['categoria']); ?>" required>

            <label>VIN:</label>
            <input type="text" name="vin" value="<?= htmlspecialchars($vehiculo['vin']); ?>" required>

            <button type="submit">Actualizar</button>
        </form>

        <p style="text-align:center; margin-top:15px;">
            <a href="home.php" class="action">Volver</a>
        </p>
    </div>
</div>

</body>
</html>
