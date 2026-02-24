<?php session_start(); if (empty($_SESSION['usuario_id'])) { header('Location: login.php'); exit; } ?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Añadir vehículo</title>
<link rel="stylesheet" href="style.css">

<style>
body {
    background-image: url('https://www.supercars.net/blog/wp-content/uploads/2020/07/982782-scaled.jpg');
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
        <h1>Añadir vehículo</h1>

        <form action="add_action.php" method="post">
            <label>Marca:</label>
            <input type="text" name="marca" required>

            <label>Modelo:</label>
            <input type="text" name="modelo" required>

            <label>Año:</label>
            <input type="number" name="anio" required>

            <label>Potencia (CV):</label>
            <input type="number" name="potencia" required>

            <label>Categoría:</label>
            <input type="text" name="categoria" required>

            <label>VIN:</label>
            <input type="text" name="vin" required>

            <button type="submit">Guardar</button>
        </form>

        <p style="text-align:center; margin-top:15px;">
            <a href="home.php" class="action">Volver</a>
        </p>
    </div>
</div>

</body>
</html>
