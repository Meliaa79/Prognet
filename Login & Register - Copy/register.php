<?php
require 'connection.php'; // Memastikan koneksi terhubung

// Fungsi validasi input untuk sanitasi
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validasi data POST dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize_input($_POST['username']);
    $fullname = sanitize_input($_POST['fullname']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $password = sanitize_input($_POST['password']);
    $confirm_password = sanitize_input($_POST['confirm_password']);

    // Validasi konfirmasi password
    if ($password != $confirm_password) {
        die("Password dan konfirmasi password tidak cocok.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Persiapan dan eksekusi SQL
    $stmt = $conn->prepare("INSERT INTO users (username, fullname, email, phone, pass) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $fullname, $email, $phone, $hashed_password);

    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman sukses atau login
        header("Location: success.php"); // atau halaman lainnya
    } else {
        // Jika gagal, tampilkan error
        echo "Error: " . $stmt->error;
    }

    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
