<?php
session_start();

$username = 'admin';
$password = '12345';

$input_username = $_POST['username'];
$input_password = $_POST['password'];

if ($input_username === $username && $input_password === $password) {
    $_SESSION['logged_in'] = true;
    
    header('Location: admin.php');
    exit;
} else {
    header('Location: index.php?error=Invalid username or password');
    exit;
}
?>