<?php 
require_once "controllerUserData.php";

// Variabel untuk menyimpan data email dan password dari cookie
$email = "";
$password = "";

// Mengecek apakah cookie "remember me" ada
if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password']; // Pastikan password tersimpan dengan aman di dunia nyata
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Proses validasi login terhadap database
    $check_email = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($db, $check_email); // Ganti $con dengan $db
    
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;

            // Jika "Remember Me" dicentang
            if (isset($_POST['rememberMe'])) {
                // Simpan email dan password di cookie selama 30 hari
                setcookie('email', $email, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/"); // Pastikan untuk mengenkripsi password sebelum menyimpannya di cookie
            } else {
                // Hapus cookie jika "Remember Me" tidak dicentang
                if (isset($_COOKIE['email'])) {
                    setcookie('email', '', time() - 3600, "/");
                }
                if (isset($_COOKIE['password'])) {
                    setcookie('password', '', time() - 3600, "/");
                }
            }

            // Redirect ke halaman pengguna yang sudah login
            header('Location: LamanPengguna.php');
                    } else {
                        $errors['login'] = "Password salah!";
                    }
                } else {
                    $errors['login'] = "Email tidak ditemukan!";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if (count($errors) > 0) {
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required value="<?php echo $password; ?>">
                    </div>
                    
                    <!-- Tambahkan Remember Me -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Don't have an account? <a href="signup-user.php">Register now</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
