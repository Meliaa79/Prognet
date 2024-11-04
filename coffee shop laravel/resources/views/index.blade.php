<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Workspace</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <style>
        :root {
            --primary: #814e2b; /* Primary color */
            --secondary: #593b1f; /* Adjusted secondary color */
            --bg-light: #fff8f0; /* Background color */
            --text-light: #fff; /* Light text color */
            --text-dark: #593b1f; /* Dark text color */
            --border: #e0e0e0; /* Border color */
            /* Add more colors as needed */
        }

        .dropdown {
            display: none;
        }

        .dropdown.open {
            display: block;
        }
    </style>
</head>

<body style="background-color: #fff8f0">
    <!-- Navbar -->
    <nav class="bg-transparent">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a class="navbar-brand" href="#">
                <img src="../img/Logo nobg.png" alt="logo2" class="w-24" />
            </a>
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" class="text-[var(--primary)] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-[var(--primary)] font-medium" href="#">Home</a>
                <a class="text-[var(--primary)] font-medium" href="../CoffeeShop.html">CoffeeShop</a>
                <a class="text-[var(--primary)] font-medium" href="../style/booking_form.html">Booking</a>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-[var(--primary)] font-medium focus:outline-none">
                        Filter
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white border border-[var(--border)] rounded-lg shadow-lg z-20">
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Fasilitas</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Rating</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Harga</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Menu</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Daftar Favorite</a></li>
                    </ul>
                </div>
                <a class="text-[var(--primary)] font-medium" href="#loginFormWrapper">Login</a>
                <a class="text-[var(--primary)] font-medium" href="../search.html">Search</a>
            </div>
        </div>
    </nav>
    <!-- Dropdown for Mobile Menu -->
    <div id="mobile-menu" class="md:hidden" style="display: none;">
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="#">Home</a>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="../CoffeeShop.html">CoffeeShop</a>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="../style/booking_form.html">Booking</a>
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="block w-full text-left px-4 py-2 text-[var(--primary)] hover:bg-gray-100">
                Filter
                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <ul x-show="open" @click.away="open = false" class="mt-2 w-full bg-white border border-[var(--border)] rounded-lg shadow-lg">
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Fasilitas</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Rating</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Harga</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Menu</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Daftar Favorite</a></li>
            </ul>
        </div>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="#loginFormWrapper">Login</a>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="../search.html">Search</a>
    </div>
    <!-- Main content -->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap">
            <div class="w-1/2 flex items-center">
                <div>
                <h1 class="text-4xl font-bold font-poppins">Setiap cangkir kopi merupakan sebuah petualangan baru</h1>
                    <p class="font-poppins" style="color: #593b1f; margin-top: 20px; text-align: justify; max-width: 600px;">
                        Cari cafe yang pas untuk bekerja, bersantai, atau sekadar menikmati kopi? Kami menyediakan rekomendasi cafe terbaik dengan berbagai pilihan, mulai dari tempat tenang untuk bekerja hingga spot unik untuk konten sosial media. Temukan cafe yang sesuai dengan kebutuhan Anda sekarang!
                    </p>
                    <button class=" btn btn-primary bg-custom-brown text-white px-4 py-2 mt-5 font-poppins hover:bg-brown-600 transition duration-200">
        View Coffee Shop
    </button>


                </div>
            </div>
            <div class="w-1/2">
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
                    <h1 class="text-[var(--primary)]">Login</h1>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required />
                    </div>
                    <button type="submit" class="btn">Login</button>
                </div>
                <div class="form-group">
                    <p>Don't have an account? <a href="register.html" class="text-[var(--primary)]">Register here</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Form Wrapper -->
    <div id="registerFormWrapper" class="overlay">
        <div class="form-container">
            <form action="register.php" method="POST">
                <div id="register" class="form-box">
                    <h1>Register</h1>
                    <div class="input-box">
                        <input type="text" name="username" placeholder="Username" required />
                        <i class="bx bxs-user-pin"></i>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required />
                        <i class="bx bxs-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" placeholder="Password" required />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirmPassword" placeholder="Confirm Password" required />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <button class="submit-btn" type="submit">Register</button>
                    <div class="login-link">
                        Already have an account? <a href="#loginFormWrapper">Login</a>
                    </div>
                    <div class="close-link">
                        <a href="#">Close</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.4/cdn.min.js" defer></script>
    <script>
    // Toggle mobile menu visibility
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.onclick = function () {
        if (mobileMenu.style.display === "none" || mobileMenu.style.display === "") {
            mobileMenu.style.display = "block";
        } else {
            mobileMenu.style.display = "none";
        }
    };

    // Function to close forms
    document.querySelectorAll('.close-link a').forEach(link => {
        link.onclick = function (e) {
            e.preventDefault();
            document.getElementById('loginFormWrapper').style.display = 'none';
            document.getElementById('registerFormWrapper').style.display = 'none';
        };
    });

    // Password validation for registration
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirmPassword');

    confirmPasswordField.addEventListener('input', function () {
        if (confirmPasswordField.value !== passwordField.value) {
            confirmPasswordField.setCustomValidity("Passwords don't match");
        } else {
            confirmPasswordField.setCustomValidity('');
        }
    });

    // Close mobile menu when resizing the window to desktop size
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768) { // Adjust the width according to your breakpoint
            mobileMenu.style.display = "none"; // Close the mobile menu
        }
    });
</script>

</body>

</html>
