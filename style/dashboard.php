<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Workspace</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/cssbroh.css" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Boxicons for form icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body style="background-color: #fff8f0">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="../asset/img/Logo nobg.png"
            alt="logo2"
            style="width: 100px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div
            class="navbar-nav ms-auto gap-4 font-poppins"
            style="transform: translateY(10px)"
          >
            <a class="nav-link active fw-medium" aria-current="page" href="#"
              >Home</a
            >
            <a class="nav-link" href="CoffeeShop.html">CoffeeShop</a>
            <a class="nav-link" href="#">Booking</a>
            
            <!-- Dropdown Filter -->
            <div class="nav-item dropdown">
                  <a class="nav-link dropdwon-toggle" href="#" id="filterDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- main content -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <div>
            <h1 class="fs-1 fw-bold font-poppins">
              Setiap cangkir kopi merupakan sebuah petualangan baru
            </h1>
            <p class="font-poppins" style="color: #593b1f; margin-top: 20px">
              Bingung memilih? Kami punya rekomendasi coffee shop terbaik untuk
              pengalaman minum kopi yang tak terlupakan!
            </p>
            <button
              class="btn btn-primary px-4 py-2 font-poppins"
              style="margin-top: 20px"
            >
              View Coffee Shop
            </button>
          </div>
        </div>
        <div class="col-6">
          <img
            src="../asset/img/landingPagePng.png"
            alt="Coffee shop"
            width="500px"
          />
        </div>
      </div>
    </div>
    <!-- main content end -->

    <!-- Login Form Wrapper -->
    <div id="loginFormWrapper" class="overlay">
      <div class="form-container">
        <!-- Login Form -->
        <form action="login.php" method="POST">
          <div id="login" class="form-box">
            <h1>Login</h1>
            <div class="input-box">
              <input
                type="text"
                name="username"
                placeholder="Username"
                required
              />
              <i class="bx bxs-user-pin"></i>
            </div>
            <div class="input-box">
              <input
                type="password"
                name="password"
                placeholder="Password"
                required
              />
              <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox" /> Remember me</label>
              <a href="#" class="forgot-password">Forgot password?</a>
            </div>

            <button class="submit-btn">Login</button>
            <div class="register-link">
              <p>
                Don't have an account?
                <a href="#registerFormWrapper" class="register-link"
                  >Register</a
                >
              </p>
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
        <!-- Register Form -->
        <form action="register.php" method="POST">
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
            <input type="email" name="email" placeholder="Email" required />
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box">
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <i class='bx bxs-phone'></i>
          </div>
          <div class="input-box">
            <input type="password" name="password" placeholder="Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password" required />
            <i class="bx bxs-lock-alt"></i>
          </div>

          <button class="submit-btn" name= "register">Register</button>
          <div class="register-link">
            <p>
              Already have an account?
              <a href="#loginFormWrapper" class="register-link">Login</a>
            </p>
          </div>
          <div class="close-link">
            <a href="#">Close</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
