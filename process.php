<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
$token = isset($_POST['token']) ? $_POST['token'] : '';


$valid_user = 'HONGJIHAN';
$valid_pass = 'J24042761';

if ($username === $valid_user && $password === $valid_pass) {
    
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;
    header('Location: welcome.php');
    exit;
} else {
    
    header('Location: login.php?error=1');
    exit;
}
?>
