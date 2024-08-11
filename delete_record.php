<?php
include 'db.php';
include 'config.php';
checkLogin();

$id = $_GET['id'];

$sql = "DELETE FROM reservas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$response = array();
if ($stmt->rowCount() > 0) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

echo json_encode($response);
?>
