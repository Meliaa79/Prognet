<?php
include "../style/sambung.php";
session_start();

$login_message = ""; // Variabel untuk menyimpan pesan login

if (isset($_SESSION["is_Login"]) && $_SESSION["is_Login"] == true) {
    header("location: ../style/LamanBaru.php");
    exit(); // Jangan lupa exit() setelah pengalihan
}

if (isset($_POST['login'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Query untuk mencari pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Username ditemukan, sekarang periksa password
        $user = $result->fetch_assoc();
        
        // Misalnya password yang tersimpan di database menggunakan hashing
        if ($password === $user['password']) { // Ganti ini dengan metode verifikasi password yang aman
            // Login berhasil
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_Login'] = true;

            // Pengalihan ke laman baru
            header("Location: ../style/LamanBaru.php");
            exit(); // Hentikan eksekusi setelah pengalihan
        } else {
            // Jika password salah
            $login_message = "Password salah! Silakan coba lagi.";
        }
    } else {
        // Jika username tidak ditemukan
        $login_message = "Username tidak ditemukan! Silakan coba lagi.";
    }

    $db->close();
}
?>
