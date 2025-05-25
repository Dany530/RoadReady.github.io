<?php
include 'conexion.php'; // Conectar a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar al usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Verificar si el usuario existe
    if ($user && password_verify($password, $user['password'])) {
        echo "¡Inicio de sesión exitoso!";
        // Redirigir o guardar sesión, si es necesario
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
?>
