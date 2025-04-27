<?php
$host = "localhost";
$user = "root";  // Username phpMyAdmin (default: root)
$pass = "";      // Password phpMyAdmin (default: kosong)
$dbname = "pengarsipan";  // Nama database

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
