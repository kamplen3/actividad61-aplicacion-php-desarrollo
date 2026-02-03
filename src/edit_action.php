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
        UPDATE vehiculos
        SET marca = ?, modelo = ?, anio = ?, potencia = ?, categoria = ?, vin = ?
        WHERE vehiculo_id = ?
    ");
    $stmt->execute([$marca, $modelo, $anio, $potencia, $categoria, $vin, $id]);
} catch (PDOException $e) {
    die('Error al actualizar: ' . $e->getMessage());
}

header('Location: home.php');
exit;
