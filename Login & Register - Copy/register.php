<?php
// Include connection
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password
    if ($password != $confirm_password) {
        die("Password and Confirm Password do not match.");
    }

    // Hashing password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL Query untuk memasukkan data ke tabel users
    $sql = "INSERT INTO users (username, fullname, email, phone, pass) VALUES ('$username', '$fullname', '$email', '$phone', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Register berhasil!";
        header("Location: login.php"); // Redirect ke halaman login
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
