<?php
include 'db.php';

$username = 'admin';
$password = password_hash('adminpassword', PASSWORD_DEFAULT);
$destacamento = 'Administración';

// Verificar si el usuario ya existe
$sql = "SELECT COUNT(*) FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$userExists = $stmt->fetchColumn();

if ($userExists) {
    echo "El usuario 'admin' ya existe.";
} else {
    $sql = "INSERT INTO users (username, password, destacamento) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password, $destacamento]);

    if ($stmt->rowCount() > 0) {
        echo "Usuario administrador agregado correctamente.";
    } else {
        echo "Error al agregar el usuario administrador.";
    }
}
?>
