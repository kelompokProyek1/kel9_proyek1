<?php
session_start();
include 'koneksi.php'; // file koneksi ke database

$username = $_POST['username'];
$password = $_POST['password'];

// Cek user di database
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['admin_login'] = true;
    $_SESSION['username'] = $user['username'];
    header("Location: admin_dashboard.php");
    exit();
} else {
    echo "Login gagal. Username atau password salah.";
}
?>
