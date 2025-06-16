<?php
session_start();

// Dummy credentials
$valid_user = "ikilledmydogs666";
$valid_pass = "kingofpop";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit;
} else {
    header("Location: index.php?error=1");
    exit;
}
?>
