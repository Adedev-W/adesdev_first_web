<?php
session_start();

// Hapus status login dari session
unset($_SESSION['username']);

// Redirect ke halaman login
header("Location: login.php");
exit;
?>
