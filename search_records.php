<?php
include 'db.php';
include 'config.php';
checkLogin();

$query = $_GET['query'];
$destacamento = getUserDestacamento();

$sql = "SELECT * FROM reservas WHERE (nombre_apellidos LIKE ? OR c_identidad LIKE ?) AND unidad = ?";
$stmt = $conn->prepare($sql);
$search = "%$query%";
$stmt->execute([$search, $search, $destacamento]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
