<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css"> <!-- Custom styles -->
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Modal Login -->
    <div id="loginModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg w-full sm:max-w-sm p-6">
            <div class="flex justify-center items-center">
                <h2 class="text-2xl font-bold tracking-tight" style="color: #593b1f;">Sign In</h2>
            </div>
            <form class="space-y-6 mt-4" action="/UserController.php" method="POST">
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
                <div class="flex items-center">
                    <input id="rememberMe" name="rememberMe" type="checkbox">
                    <label for="rememberMe" class="ml-2 block text-bold">Remember me</label>
                </div>
                <div class="flex justify-center">
                    <button type="submit" style="background-color: #814e2b;" class="w-full text-white py-2 rounded-md focus:ring-2 focus:ring-inset focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Login</button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Don't have an account?
                <a href="#registerFormWrapper" class="font-semibold" style="color: #593b1f;">Register</a>
            </p>
            <!-- Close Button -->
            <div class="close-link mt-4 text-center">
                <a href="javascript:void(0);" id="closeModalButton" onclick="document.getElementById('loginModal').classList.add('hidden');">Close</a>
            </div>
        </div>
    </div>

    <!-- Add JavaScript for Modal -->
    <script>
        // Get modal element
        const loginModal = document.getElementById('loginModal');
        const closeLoginModal = document.getElementById('closeLoginModal');

        // Open modal (for testing, you can remove this part when not needed)
        setTimeout(() => {
            loginModal.classList.remove('hidden');
        }, 500); // Automatically show modal after 500ms (just for testing)

        // Close modal
        closeLoginModal.addEventListener('click', () => {
            loginModal.classList.add('hidden');
        });

        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target === loginModal) {
                loginModal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
