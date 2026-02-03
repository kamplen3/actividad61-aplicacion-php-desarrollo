<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit;
}
require 'config.php';

$marca     = trim($_POST['marca'] ?? '');
$modelo    = trim($_POST['modelo'] ?? '');
$anio      = (int)($_POST['anio'] ?? 0);
$potencia  = (int)($_POST['potencia'] ?? 0);
$categoria = trim($_POST['categoria'] ?? '');
$vin       = trim($_POST['vin'] ?? '');

if ($marca === '' || $modelo === '' || !$anio || !$potencia || $categoria === '' || $vin === '') {
    die('Faltan datos obligatorios.');
}

try {
    $stmt = $pdo->prepare("
        INSERT INTO vehiculos (marca, modelo, anio, potencia, categoria, vin)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$marca, $modelo, $anio, $potencia, $categoria, $vin]);
} catch (PDOException $e) {
    // Por ejemplo, VIN duplicado
    die('Error al insertar: ' . $e->getMessage());
}

header('Location: home.php');
exit;
