<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Workspace</title>
    <link rel="stylesheet" href="../style/dashboard - Copy.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body style="background-color: #fff8f0">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/Logo nobg.png" alt="logo2" style="width: 100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto gap-4 font-poppins" style="transform: translateY(10px)">
                    <a class="nav-link active fw-medium" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="../CoffeeShop.html">CoffeeShop</a>
                    <a class="nav-link" href="../style/booking_form.html">Booking</a>

                    <!-- Dropdown Filter -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="filterDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                            <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                            <li><a class="dropdown-item" href="#">Rating</a></li>
                            <li><a class="dropdown-item" href="#">Harga</a></li>
                            <li><a class="dropdown-item" href="#">Menu</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Favorite</a></li>
                        </ul>
                    </div>

                    <a class="nav-link" href="#loginFormWrapper">Login</a>
                    <a class="nav-link" href="../search.html">Search</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Main content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <div>
                    <h1 class="fs-1 fw-bold font-poppins">Setiap cangkir kopi merupakan sebuah petualangan baru</h1>
                    <p class="font-poppins" style="color: #593b1f; margin-top: 20px; text-align: justify; max-width: 600px;">
                        Cari cafe yang pas untuk bekerja, bersantai, atau sekadar menikmati kopi? Kami menyediakan rekomendasi cafe terbaik dengan berbagai pilihan, mulai dari tempat tenang untuk bekerja hingga spot unik untuk konten sosial media. Temukan cafe yang sesuai dengan kebutuhan Anda sekarang!
                    </p>
                    <button class="btn btn-primary px-4 py-2 font-poppins" style="margin-top: 20px">View Coffee Shop</button>
                </div>
            </div>
            <div class="col-6">
                <img src="../img/landingPage.png" alt="Coffee shop" />
            </div>
        </div>
    </div>
    <!-- Main content end -->

    <!-- Login Form Wrapper -->
    <?php require_once "controllerUserData.php"; ?>
    <div id="loginFormWrapper" class="overlay">
        <div class="form-container">
                <div id="login" class="form-box">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <i class="bx bxs-user-pin"></i>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" /> Remember me</label>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgotFormWrapper">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Don't have an account? <a href="signup-user.php">Register now</a></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Forgot Password --> 
    
    <div id="forgotFormWrapper" class="overlay">
        <div class="form-container">
                <div id="forgot" class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php require_once "controllerUserData.php"; ?>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- New Password -->
    <?php require_once "controllerUserData.php"; ?>
        <?php 
        $email = $_SESSION['email'];
        if($email == false){
        header('Location: login-user.php');
        }
        ?>
    <div id="newPasswordFormWrapper" class="overlay">
        <div class="form-container">
                <div id="newPassword" class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Password Change -->
    <?php require_once "controllerUserData.php"; ?>
        <?php
        if($_SESSION['info'] == false){
            header('Location: login-user.php');  
        }
        ?>
    <div id="passwordChangeFormWrapper" class="overlay">
        <div class="form-container">
                <div id="passwordChange" class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login-user.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Reset Code -->
    <?php require_once "controllerUserData.php"; ?>
        <?php 
        $email = $_SESSION['email'];
        if($email == false){
        header('Location: login-user.php');
        }
        ?>
    <div id="resetFormWrapper" class="overlay">
        <div class="form-container">
                <div id="reset" class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- User OTP Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">Verify OTP</h3>
                <p class="text-center">Enter the OTP sent to your email.</p>
                <form action="verify-otp.php" method="POST" autocomplete="off">
                    <?php
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-primary w-100" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of User OTP Form -->

    <!-- Register Form Wrapper -->
    <div id="registerFormWrapper" class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="register-user.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Register</h2>
                    <p class="text-center">Create your account.</p>
                    <?php if(count($errors) > 0){ ?>
                        <div class="alert alert-danger text-center">
                            <?php foreach($errors as $showerror){ echo $showerror; } ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                            <input type="text" name="username" placeholder="Username" required />
                            <i class="bx bxs-user"></i>
                        </div>
                        <div class="form-group">
                        <input type="text" name="fullname" placeholder="Full Name" required>
                            <i class="bx bxs-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email" required />
                            <i class="bx bxs-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Phone Number" required />
                            <i class='bx bxs-phone'></i>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Enter your password" minlength="6" required />
                            <i class="bx bxs-lock-alt"></i>
                        </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="register" value="Register">
                    </div>
                    <div class="link login-link text-center">Already have an account? <a href="login-user.php">Login now</a></div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript for Remember Me and Forgot Password -->
    <script>
    // Fungsi untuk membuka form register dari login
    document.querySelectorAll('.go-to-register').forEach(link => {
    link.onclick = function(e) {
        e.preventDefault();
        document.getElementById('loginFormWrapper').style.display = 'none';
        document.getElementById('registerFormWrapper').style.display = 'block';
    };
    });

    // Fungsi untuk membuka form login dari register
    document.querySelectorAll('.go-to-login').forEach(link => {
    link.onclick = function(e) {
        e.preventDefault();
        document.getElementById('registerFormWrapper').style.display = 'none';
        document.getElementById('loginFormWrapper').style.display = 'block';
    };
    });

    // Validasi Confirm Password
    document.getElementById('registerForm').onsubmit = function(e) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        e.preventDefault(); // Mencegah form dikirim
        alert('Passwords do not match!');
    }
    };

    // Fungsi untuk menutup form saat klik 'Close'
    document.querySelectorAll('.close-link a').forEach(link => {
        link.onclick = function(e) {
            e.preventDefault();
            this.closest('.overlay').style.display = 'none';
        };
    });

    </script>

  </body>
</html>
