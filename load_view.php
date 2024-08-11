<?php
include 'db.php';
include 'config.php';
checkLogin();

$view = $_GET['view'];
$destacamento = getUserDestacamento();

$sql = "SELECT * FROM reservas WHERE unidad = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$destacamento]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "views/$view.php";
?>
