<?php
session_start();
include './koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($con, "SELECT * FROM tbl_users WHERE username = '$username' AND password = MD5('$password')");

if (mysqli_num_rows($data) > 0) {
    $_SESSION['login'] = true;

    if (isset($_POST['remember'])) {
        $time = time();
        setcookie('login', $username, $time + 3600);
    }
    header('Location: ../dashboard.php');
    exit();
} else {
    header('Location: ../login.php?pesan=gagal');
    exit();
}
