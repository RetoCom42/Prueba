<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $destacamento = $_POST['destacamento'];

    $sql = "INSERT INTO users (username, password, destacamento) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $password, $destacamento]);

    if ($stmt->rowCount() > 0) {
        echo "Usuario agregado correctamente.";
    } else {
        echo "Error al agregar el usuario.";
    }
}
?>
