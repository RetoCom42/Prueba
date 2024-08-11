<?php
include 'db.php';
include 'config.php';
checkLogin();

$destacamento = getUserDestacamento();

$sql = "SELECT COUNT(*) as total FROM reservas WHERE unidad = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$destacamento]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($data);
?>
