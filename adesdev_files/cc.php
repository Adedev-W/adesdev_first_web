<?php
$host = '127.0.0.1';
$database = 'webporto';
$username = '';
$password = '';
//set password for 'root'@'localhost' = password('adesdev');
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
