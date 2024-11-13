<!DOCTYPE html>
<html lang="en">

<?php 

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Initialize an array to store errors
    $errors = [];

    // Validate inputs (You can customize this based on your requirements)
    if (empty($username) || empty($fullname) || empty($email) || empty($phone) || empty($password) || empty($cpassword)) {
        $errors[] = "All fields are required.";
    } elseif ($password !== $cpassword) {
        $errors[] = "Passwords do not match.";
    }

    // If no errors, proceed to register the user
    if (count($errors) === 0) {
        // Insert the new user into the database
        // Your insertion logic goes here
    }
}
?>

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
            <div x-data="{ open: false }">
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
            <a class="text-[var(--primary)] font-medium" href="javascript:void(0);" id="loginModalButton" onclick="document.getElementById('loginModal').classList.remove('hidden');">Login</a>
            <a class="text-[var(--primary)] font-medium" href="../views/search.blade.php">Search</a>
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
                    <button class=" btn btn-primary bg-custom-brown rounded-md px-3 py-1.5 text-white px-4 py-2 mt-5 font-poppins hover:bg-brown-600 transition duration-200">
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

    <!-- Login -->
    <div id="loginModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg w-full sm:max-w-sm p-6">
        <div class="flex justify-center items-center">
        <h2 class="text-2xl font-bold tracking-tight" style="color: #593b1f;">Sign In</h2>
        </div>
        <form class="space-y-6 mt-4" action="/UserController.php" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"/>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold" style="color: #593b1f;">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                </div>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center">
                <input id="rememberMe" name="rememberMe" type="checkbox">
                <label for="rememberMe" class="ml-2 block text-bold">Remember me</label>
            </div>

            <div>
                <button type="submit" style="background-color: #814e2b;" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 ">Sign in</button>
            </div>
        </form>
        <p class="mt-10 text-center text-sm text-gray-500">
            Don't have an account?
            <a href="#registerFormWrapper" class="font-semibold" style="color: #593b1f;">Register</a>
        </p>
        <div class="close-link mt-4 text-center">
            <a href="javascript:void(0);" id="closeModalButton" onclick="document.getElementById('loginModal').classList.add('hidden');">Close</a>
        </div>
    </div>
</div>

    <!-- Forgot Password -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <form action="forgot-password.php" method="POST" autocomplete="">
            <h2 class="text-2xl font-semibold text-center text-gray-800">Forgot Password</h2>
            <p class="text-center text-gray-600">Enter your email address</p>
            <?php if (count($errors) > 0): ?>
                <div class="mt-4 bg-red-200 text-red-700 border border-red-300 rounded p-3 text-center">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="mt-6">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email; ?>">
            </div>
            <div class="mt-6">
                <input class="w-full px-4 py-3 bg-[#814e2b] text-white rounded-md cursor-pointer hover:bg-opacity-80 transition duration-200" type="submit" name="check-email" value="Continue">
            </div>
        </form>
    </div>
</div>
    <!-- End Forgot Password -->
    
    <!-- Reset Code -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <form action="reset-code.php" method="POST" autocomplete="off">
            <h2 class="text-2xl font-semibold text-center text-gray-800">Code Verification</h2>
            <?php if (isset($_SESSION['info'])): ?>
                <div class="mt-4 bg-green-200 text-green-700 border border-green-300 rounded p-3 text-center">
                    <?php echo $_SESSION['info']; ?>
                </div>
            <?php endif; ?>
            <?php if (count($errors) > 0): ?>
                <div class="mt-4 bg-red-200 text-red-700 border border-red-300 rounded p-3 text-center">
                    <?php foreach ($errors as $showerror): ?>
                        <p><?php echo $showerror; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="mt-6">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="otp" placeholder="Enter code" required>
            </div>
            <div class="mt-6">
                <input class="w-full px-4 py-3 bg-[#814e2b] text-white rounded-md cursor-pointer hover:bg-opacity-80 transition duration-200" type="submit" name="check-reset-otp" value="Submit">
            </div>
        </form>
    </div>
</div>
    <!-- End Reset Code -->

    <!-- New Password -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <form action="new-password.php" method="POST" autocomplete="off">
            <h2 class="text-2xl font-semibold text-center text-gray-800">New Password</h2>
            <?php if (isset($_SESSION['info'])): ?>
                <div class="mt-4 bg-green-200 text-green-700 border border-green-300 rounded p-3 text-center">
                    <?php echo $_SESSION['info']; ?>
                </div>
            <?php endif; ?>
            <?php if (count($errors) > 0): ?>
                <div class="mt-4 bg-red-200 text-red-700 border border-red-300 rounded p-3 text-center">
                    <?php foreach ($errors as $showerror): ?>
                        <p><?php echo $showerror; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="mt-6">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" placeholder="Create new password" required>
            </div>
            <div class="mt-4">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="cpassword" placeholder="Confirm your password" required>
            </div>
            <div class="mt-6">
                <input class="w-full px-4 py-3 bg-[#814e2b] text-white rounded-md cursor-pointer hover:bg-opacity-80 transition duration-200" type="submit" name="change-password" value="Change">
            </div>
        </form>
    </div>
</div>
    <!-- End New Password -->

    <!-- Changed Password -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <?php if (isset($_SESSION['info'])): ?>
            <div class="mt-4 bg-green-200 text-green-700 border border-green-300 rounded p-3 text-center">
                <?php echo $_SESSION['info']; ?>
            </div>
        <?php endif; ?>
        <form action="login-user.php" method="POST">
            <div class="mt-6">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="mt-4">
                <input class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="mt-6">
                <input class="w-full px-4 py-3 bg-[#814e2b] text-white rounded-md cursor-pointer hover:bg-opacity-80 transition duration-200" type="submit" name="login-now" value="Login Now">
            </div>
        </form>
    </div>
</div>
    <!-- End Changed Password -->

    <!-- Register Form Wrapper -->
    <div id="registerFormWrapper" class="overlay fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="form-container  bg-white p-8 rounded-lg shadow-lg w-96">
            <form action="{{ route('signup') }}" method="POST">
                <div id="register" class="form-box">
                    <h1 class="text-2xl font-bold mb-6 flex justify-center items-center" style="color: #593b1f;">Register</h1>
                    <div class="input-box mb-4">
                        <input type="text" name="username" placeholder="Username" required class="border border-gray-300 rounded w-full p-2" />
                        <i class="bx bxs-user-pin"></i>
                    </div>
                    <div class="input-box mb-4">
                        <input type="text" name="fullname" placeholder="Full Name" required class="border border-gray-300 rounded w-full p-2" />
                        <i class="bx bxs-user-pin"></i>
                    </div>
                    <div class="input-box mb-4">
                        <input type="email" name="email" placeholder="Email" required class="border border-gray-300 rounded w-full p-2" />
                        <i class="bx bxs-envelope"></i>
                    </div>
                    <div class="input-box mb-4">
                        <input type="tel" name="phone" placeholder="Phone Number" required class="border border-gray-300 rounded w-full p-2" />
                        <i class='bx bxs-phone'></i>
                    </div>
                    <div class="input-box mb-4">
                        <input type="password" id="password" name="password" placeholder="Password" required class="border border-gray-300 rounded w-full p-2" />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div class="input-box mb-6">
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required class="border border-gray-300 rounded w-full p-2" />
                        <i class="bx bxs-lock-alt"></i>
                    </div>
                    <div>
                        <button type="submit" style="background-color: #814e2b;" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 ">Register</button>
                    </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="#loginModal" class="font-semibold" style="color: #593b1f;">Login</a>
            </p>
            <div class="close-link mt-4 text-center">
                <a href="javascript:void(0);" id="closeRegisterButton" onclick="document.getElementById('registerFormWrapper').classList.add('hidden');">Close</a>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.4/cdn.min.js" defer></script>
    <script>
    
    document.getElementById('loginModalButton').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah perilaku default tautan
        document.getElementById('loginModal').classList.remove('hidden'); // Tampilkan modal
    });

    // Tambahkan event listener untuk menutup modal saat tombol close diklik
    document.querySelector('#loginModal .text-gray-400').addEventListener('click', function() {
        document.getElementById('loginModal').classList.add('hidden'); // Sembunyikan modal
    });

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
    document.getElementById('closeRegisterButton').addEventListener('click', function() {
        document.getElementById('registerFormWrapper').classList.add('hidden'); // Sembunyikan modal register
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
