<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/register.css"> <!-- Custom styles -->
    <!-- Tambahkan link Boxicons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div id="registerFormWrapper" class="overlay fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="form-container bg-white p-8 rounded-lg shadow-lg w-96">
            <!-- Form Register -->
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
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="#loginModal" class="font-semibold" style="color: #593b1f;">Login</a>
            </p>
            <div class="close-link mt-4 text-center">
            <button id="closeRegisterButton" class="text-sm text-red-500 hover:text-red-700 focus:outline-none">
                Close
            </button>
        </div>

        </div>
    </div>

    <script>
        // Validasi Konfirmasi Password
        const form = document.querySelector("form");
        form.addEventListener("submit", function(e) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                e.preventDefault(); // Mencegah form submit
                alert("Passwords do not match.");
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
    const closeRegisterButton = document.getElementById('closeRegisterButton');
    const registerFormWrapper = document.getElementById('registerFormWrapper');

    // Log untuk memastikan elemen ditemukan
    console.log('Close button:', closeRegisterButton);
    console.log('Modal wrapper:', registerFormWrapper);

    // Pastikan tombol dan modal ada
    if (closeRegisterButton && registerFormWrapper) {
        closeRegisterButton.addEventListener('click', function () {
            // Menghilangkan kelas hidden untuk menutup modal
            registerFormWrapper.classList.add('hidden');
        });
    }
});


    </script>
</body>
</html>
