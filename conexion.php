<?php
$host = 'localhost';  // Cambia esto si estás usando otro host
$dbname = 'usuarios'; // Nombre de la base de datos
$username = 'root';   // Tu usuario de MySQL
$password = '';       // Tu contraseña de MySQL

try {
    // Crear la conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>