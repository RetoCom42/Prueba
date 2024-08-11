<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'views/admin/sidebar.php';
include 'views/admin/dashboard.php';
?>


