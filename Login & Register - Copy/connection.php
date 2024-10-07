<?php
$servername = "localhost";  // Ubah jika menggunakan server lain
$username = "root";          // Ganti dengan username database Anda
$password = "";              // Ganti dengan password database Anda
$dbname = "workspace";       // Nama database

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
