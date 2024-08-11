<?php
session_start();

function checkLogin() {
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
}

function getUserDestacamento() {
    return $_SESSION['user']['destacamento'];
}
?>
