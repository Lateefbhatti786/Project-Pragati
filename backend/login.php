<?php
session_start();
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];   // 👈 store name
$_SESSION['email'] = $user['email']; // optional (keep email too)
$_SESSION['role'] = $user['role'];
        if ($user['role'] === 'admin') {
            echo "admin";
            } else {
                echo "user";
        }
        } else {
            echo "wrong_password";
            }
} else {
    echo "no_user";
}
?>