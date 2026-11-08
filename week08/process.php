<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "Bao"; 
    $valid_password = "106726218";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.html?error=InvalidCredentials");
        exit();
    }
} else {
    header("Location: welcome.php");
    exit();
}
?>