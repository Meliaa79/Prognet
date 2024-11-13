<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Workspace</title>
    <link rel="stylesheet" href="../style/dashboard.css" />
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
    <div id="loginFormWrapper" class="overlay">
        <div class="form-container">
            <form action="login.php" method="POST">
                <div id="login" class="form-box">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="Username" required />
                        <i class="bx bxs-user-pin"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required />
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox" /> Remember me</label>
                        <a href="#forgotPasswordFormWrapper" class="forgot-password">Forgot password?</a>
                    </div>

                    <button class="submit-btn" type="submit">Login</button>
                    <div class="login-link">
                        <p>Don't have an account? <a href="#registerFormWrapper" class="go-to-register">Register</a></p>
                    </div>

                    <div class="close-link">
                        <a href="#">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Form Wrapper -->
    <div id="registerFormWrapper" class="overlay">
        <div class="form-container">
            <form action="register.php" method="POST" id="registerForm">
                <div id="register" class="form-box">
                    <h1>Register</h1>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="Username" required />
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="fullname" placeholder="Full Name" required />
                        <i class="bx bxs-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Enter your email" required />
                        <i class="bx bxs-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="tel" name="phone" placeholder="Phone Number" required />
                        <i class='bx bxs-phone'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" placeholder="Enter your password" minlength="6" required />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirmPassword" name="confirm_password" placeholder="Re-enter Password" required />
                        <i class="bx bxs-lock-alt"></i>
                    </div>

                    <button class="submit-btn" type="submit">Register</button>
                </div>
                <div class="register-link">
                    <p>Already have an account? <a href="#loginFormWrapper" class="go-to-login">Login</a></p>
                </div>

                <div class="close-link">
                    <a href="#">Close</a>
                </div>
            </form>
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
