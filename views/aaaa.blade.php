<div id="registerFormWrapper" class="overlay fixed inset-0 bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="form-container bg-white p-8 rounded-lg shadow-lg w-96">
            <!-- Form Register -->
            @else
            <form action="{{ route('register.submit') }}" method="POST">
            @csrf
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