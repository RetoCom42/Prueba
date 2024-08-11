<?php
include 'config.php';
checkLogin();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Empleados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'views/header.php'; ?>
    <div id="content"></div>
    <?php include 'views/footer.php'; ?>
    <script src="scripts.js"></script>
</body>
</html>
