<?php
// Mulai session
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Hapus cookie login jika ada
if (isset($_COOKIE['login'])) {
    setcookie("login", "", time() - 3600);
}

// Redirect ke halaman login
header('location: ../login.php?pesan=logout');
exit();
