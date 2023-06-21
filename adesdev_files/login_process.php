<?php
session_start();

// Proses validasi login

if ($login_success) {
    $_SESSION['username'] = true;
    // Redirect ke halaman sukses login
    header("Location: user_pages.php");
    exit;
} else {
    // Login gagal
    // Tampilkan pesan error
}
?>
