<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reserva";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    error_log("Conexión fallida: " . $e->getMessage());
    die("Conexión fallida. Por favor, inténtelo más tarde.");
}
?>

