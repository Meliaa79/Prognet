<?php
session_start();
include('../style/sambung.php'); // Ganti dengan koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    // Cek username dan password dari database
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, md5($password)); // Pastikan untuk melakukan hashing password
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login sukses
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Ganti dengan halaman dashboard
    } else {
        echo "<script>alert('Invalid username or password.'); window.history.back();</script>";}
}
?>