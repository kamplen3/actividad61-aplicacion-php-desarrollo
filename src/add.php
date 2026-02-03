<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir vehículo</title>
</head>
<body>
    <h1>Añadir vehículo</h1>
    <p><a href="home.php">Volver al listado</a></p>

    <form action="add_action.php" method="post">
        <label>Marca:</label><br>
        <input type="text" name="marca" required><br><br>

        <label>Modelo:</label><br>
        <input type="text" name="modelo" required><br><br>

        <label>Año:</label><br>
        <input type="number" name="anio" required><br><br>

        <label>Potencia (CV):</label><br>
        <input type="number" name="potencia" required><br><br>

        <label>Categoría (F1, Hypercar, GT3, etc.):</label><br>
        <input type="text" name="categoria" required><br><br>

        <label>VIN (único):</label><br>
        <input type="text" name="vin" required><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
