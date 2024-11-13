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
            --primary: #814e2b; 
            --secondary: #593b1f; 
            --bg-light: #fff8f0; 
            --text-light: #fff; 
            --text-dark: #593b1f; 
            --border: #e0e0e0; 
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
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="#loginModal">Login</a>
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
                    <button class="btn btn-primary bg-custom-brown rounded-md px-4 py-2 text-white mt-5 sm:block md:block lg:block">
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
   <div id="loginModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg w-full sm:max-w-sm p-6">
            <div class="flex justify-center items-center">
                <h2 class="text-2xl font-bold tracking-tight" style="color: #593b1f;">Sign In</h2>
            </div>
            <form class="space-y-6 mt-4" action="{{ route('login.submit') }}" method="POST" autocomplete="off">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"/>
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
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>
                <div class="flex items-center">
                    <input id="rememberMe" name="rememberMe" type="checkbox">
                    <label for="rememberMe" class="ml-2 block text-bold">Remember me</label>
                </div>
                <div class="flex justify-center">
                    <button type="submit" style="background-color: #814e2b;" class="w-full text-white py-2 rounded-md focus:ring-2 focus:ring-inset focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600" id="M-login">Login</button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Don't have an account?
                <a href="#registerFormWrapper" class="font-semibold" style="color: #593b1f;">Register</a>
            </p>
            <!-- Close Button -->
            <div class="close-link mt-4 text-center">
                <a href="javascript:void(0);" id="closeModalButton" class="text-custom-brown hover:text-custom-brown">
                    Close
                </a>
            </div>
        </div>
    </div>
    <!-- Login end -->

    <!-- Register --> 
    <div id="registerFormWrapper" class="overlay fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="form-container bg-white p-8 rounded-lg shadow-lg w-96">
            <!-- Form Register -->
            <form action="{{ route('register.submit') }}" method="POST">
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
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="#loginModal" class="font-semibold" style="color: #593b1f;">Login</a>
            </p>
            <div class="close-link mt-4 text-center">
                <a href="javascript:void(0);" id="closeModalButton" class="text-custom-brown hover:text-custom-brown">
                    Close
                </a>
            </div>
        </div>
    </div>
    <!-- Register end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.4/cdn.min.js" defer></script>
    <script>
    
    document.getElementById('loginModalButton').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah perilaku default tautan
        document.getElementById('loginModal').classList.remove('hidden'); // Tampilkan modal
    });

    // Menambahkan event listener untuk tombol close
    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.getElementById('closeModalButton');
        const modal = document.getElementById('loginModal');
        
        if (closeButton && modal) {
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.getElementById('closeModalButton');
        const modal = document.getElementById('registerFormWrapper');
        
        if (closeButton && modal) {
            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
            });
        }
    });

    // Pastikan fungsi closeRegisterPopup() dipanggil dengan benar
    document.getElementById('closeRegisterButton').addEventListener('click', closeRegisterPopup);


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

    // Close mobile menu when resizing the window to desktop size
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768) { 
            mobileMenu.style.display = "none"; 
        }
    });

</script>

</body>

</html>
