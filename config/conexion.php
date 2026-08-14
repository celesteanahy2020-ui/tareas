<?php
$dsn = "mysql:host=localhost;dbname=tareas;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>