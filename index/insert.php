<?php
include 'sambung.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    //meriksa apakah username dan password kosong
    if(empty($username) || empty($password)) {
        echo "Username atau password tidak boleh kosong.";
    } else {
        //contoh query untuk mengecek keberadaan username dan password
        $stmt = $conn->prepare("SELECT pass FROM users WHERE username = ?");
        $stmt->bind_param("s", $username); // "s" menandakan parameter sebagai string
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User ditemukan, ambil hashed password dari database
            $row = $result->fetch_assoc();
            $hashed_password = $row['pass'];

            // Memeriksa password yang dimasukkan dengan hashed password
            if (password_verify($password, $hashed_password)) {
                // Password cocok
                echo "Login berhasil!";
                // Arahkan ke halaman lain
                // header("Location: halaman_berhasil_login.php"); // Uncomment untuk mengarahkan ke halaman lain
                exit();
            } else {
                echo "Username atau password salah.";
            } 
        } else {
            echo "Username atau password salah.";
        }
    }
}

$conn->close(); //menutup koneksi
?>