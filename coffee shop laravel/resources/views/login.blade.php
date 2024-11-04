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
    <div class="bg-white rounded-lg shadow-md p-6 w-96">
        <form action="{{ route('login') }}" method="POST" autocomplete="">
            @csrf
            <h2 class="text-center text-2xl font-semibold mb-4">Login Form</h2>
            <p class="text-center text-gray-600 mb-4">Login with your email and password.</p>

            @if ($errors->any())
                <div class="alert alert-danger text-red-600 text-center mb-4">
                    {{ implode('', $errors->all(':message')) }}
                </div>
            @endif

            <div class="mb-4">
                <input class="form-control w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" type="email" name="email" placeholder="Email Address" required value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <input class="form-control w-full p-3 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" type="password" name="password" placeholder="Password" required>
            </div>
            
            <div class="flex items-center mb-4">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" {{ old('rememberMe') ? 'checked' : '' }}>
                <label class="form-check-label ml-2 text-gray-700" for="rememberMe">Remember Me</label>
            </div>
            <div class="text-left mb-4"><a class="text-blue-600 hover:underline" href="forgot-password.php">Forgot password?</a></div>
            <div>
                <input class="w-full p-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none" type="submit" value="Login">
            </div>
            <div class="text-center mt-4">
                <span class="text-gray-600">Don't have an account?</span> <a class="text-blue-600 hover:underline" href="signup-user.php">Register now</a>
            </div>
        </form>
    </div>
</body>
</html>
