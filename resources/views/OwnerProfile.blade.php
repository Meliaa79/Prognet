<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Our Workspace</title>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- External CSS (for custom styles) -->
        <link rel="stylesheet" href="../css/Laman.css">

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
        />
        <!-- boxicons -->
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
        </style>
    </head>

    <body class="bg-[#fff8f0] font-poppins">
        <!-- Sidebar -->
        <aside class="sidebar fixed top-0 left-0 bottom-0 w-[116px] h-screen p-[1.7rem] bg-[#734424] text-[#fff8f0] transition-all duration-500 ease-in-out lg:w-[240px] hover:w-[240px]">
            <!-- Logo -->
            <div class="logo mb-6">
                <img src="../img/Logo nobg.png" alt="Logo" class="w-[60%]" />
            </div>
            <!-- Menu -->
            <ul class="menu h-[88%] relative space-y-4">
                <li class="hover:bg-[#814e2b] rounded-lg">
                    <a href="#" class="flex items-center space-x-3 text-sm">
                        <i class='bx bx-user'></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="hover:bg-[#814e2b] rounded-lg">
                    <a href="../views/ListBooking.blade.php" class="flex items-center space-x-3 text-sm">
                        <i class='bx bx-calendar-check'></i>
                        <span>List Booking</span>
                    </a>
                </li>
                <li class="absolute bottom-0 w-full hover:bg-[#814e2b] rounded-lg">
                    <a href="../views/dashboard.blade.php" class="flex items-center space-x-3 text-sm">
                        <i class='bx bx-log-out'></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content transition-all duration-500 ease-in-out ml-[116px] lg:ml-[240px] p-8">
            <div class="header-wrapper mb-8">
                <div id="welcomeMessage" class="header-title text-primary">
                    <h2 class="text-3xl font-semibold">Welcome, Jayagiri-!!</h2>
                    <p class="text-lg text-focus">Manage your account details and settings here</p>
                </div>
            </div>

            <div id="ownerProfile" class="owner-profile-view bg-white p-8 rounded-xl shadow-lg mb-8 flex flex-col md:flex-row gap-8">
                <div class="owner-property flex justify-center md:justify-start mt-20">
                    <img src="../img/vintage icon.jpeg" alt="Profile Picture" class="w-48 h-48 rounded-full shadow-lg"/>
                </div>
                <div class="owner-detail flex flex-col gap-4 w-full md:w-3/4">
                    <div class="detail-grid flex flex-col gap-4 px-2">
                        <div class="detail-item bg-gray-100 p-4 rounded-md shadow-sm">
                            <strong class="text-primary">Cafe Name:</strong>
                            <span id="displayName" class="break-words">Jayagiri</span>
                        </div>
                        <div class="detail-item bg-gray-100 p-4 rounded-md shadow-sm">
                            <strong class="text-primary">Address:</strong>
                            <span id="displayUsername" class="break-words">Jl. Jaya Giri Utama Ruko Kapling No.A6, Denpasar Selatan, Kota Denpasar</span>
                        </div>
                        <div class="detail-item bg-gray-100 p-4 rounded-md shadow-sm">
                            <strong class="text-primary">Email:</strong>
                            <span id="displayEmail" class="break-words">Jayagiri55@gmail.com</span>
                        </div>
                        <div class="detail-item bg-gray-100 p-4 rounded-md shadow-sm">
                            <strong class="text-primary">Phone Number:</strong>
                            <span id="displayPhone" class="break-words">08234756789388</span>
                        </div>
                        <button class="py-2 px-4 bg-blue-500 text-white rounded-full mt-4 w-full md:w-auto hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" onclick="showEditForm()">Edit Data</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Profile Form (hidden initially) -->
        <div id="editProfileForm" class="owner-profile-edit hidden flex justify-between items-center bg-white p-8 rounded-xl shadow-lg mb-8 gap-8 mt-8">
            <form id="updateForm" class="detail-grid grid grid-cols-1 gap-8" onsubmit="showConfirmation(event)">
                <div class="detail-item flex justify-between items-center">
                    <label class="text-[#734424] font-medium"><strong>Cafe Name:</strong></label>
                    <input type="text" name="CafeName" id="editFullName" value="Jayagiri" class="border border-gray-300 rounded px-4 py-2" required />
                </div>
                <div class="detail-item">
                    <label><strong>Username:</strong></label>
                    <input type="text" name="username" id="editUsername" value="Jl. Jaya Giri Utama Ruko Kapling No.A6, Denpasar Selatan, Kota Denpasar" required />
                </div>
                <div class="detail-item">
                    <label><strong>Email:</strong></label>
                    <input type="email" name="email" id="editEmail" value="Jayagiri55@gmail.com" required />
                </div>
                <div class="detail-item">
                    <label><strong>Phone Number:</strong></label>
                    <input type="text" name="phoneNumber" id="editPhone" value="08234756789388" required />
                </div>
                <div class="button-group flex gap-4">
                    <!-- Cancel Button (Secondary) -->
                    <button type="button" onclick="cancelEdit()" 
                        class="text-secondary font-regular hover:underline">
                        Cancel
                    </button>

                    <!-- Save Button (Primary) -->
                    <button type="submit" 
                        class="text-white font-semibold py-2 px-4 rounded transition-all duration-300 ease-in-out hover:opacity-90"
                        style="background-color: var(--primary); border: 1px solid var(--border);">
                        Save
                    </button>
                </div>
            </form>
        </div>

        <!-- Pop-up Confirmation for Save -->
        <div id="confirmation-popup" class="popup hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
            <div class="popup-content bg-white p-6 rounded-lg shadow-lg text-center">
                <p class="text-[#734424]">Are you sure you want to save the changes?</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <button class="bg-[#814e2b] text-white px-6 py-3 rounded-lg w-32" onclick="saveProfile()">Yes</button>
                    <button class="bg-red-500 text-white px-6 py-3 rounded-lg w-32" onclick="closePopup()">No</button>
                </div>
            </div>
        </div>

        <!-- Pop-up Confirmation for Cancel -->
        <div id="cancel-popup" class="popup hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
            <div class="popup-content bg-white p-6 rounded-lg shadow-lg text-center">
                <p class="text-[#734424]">Are you sure you want to cancel the changes?</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <button class="bg-[#814e2b] text-white px-6 py-3 rounded-lg w-32" onclick="cancelEditAction()">Yes, Cancel</button>
                    <button class="bg-gray-500 text-white px-6 py-3 rounded-lg w-32" onclick="closeCancelPopup()">No, Go Back</button>
                </div>
            </div>
        </div>

        <script>
            function showEditForm() {
                console.log('showEditForm dipanggil');  // Debugging log
                // Menyembunyikan profil dan menampilkan form edit
                document.getElementById('ownerProfile').style.display = 'none'; 
                document.getElementById('editProfileForm').style.display = 'flex';
                document.getElementById("welcomeMessage").classList.add("hidden"); // Menyembunyikan pesan selamat datang
            }

            function cancelEdit() {
                // Menampilkan popup konfirmasi untuk membatalkan perubahan
                document.getElementById('cancel-popup').style.display = 'flex';  // Tampilkan cancel confirmation popup
            }

            function cancelEditAction() {
                // Logic to cancel the edit and revert changes
                document.getElementById('ownerProfile').style.display = 'flex';  // Tampilkan profil
                document.getElementById('editProfileForm').style.display = 'none';  // Sembunyikan form edit
                document.getElementById("welcomeMessage").classList.remove("hidden"); // Menampilkan kembali pesan selamat datang
                closeCancelPopup();  // Menutup cancel confirmation popup
            }

            function closeCancelPopup() {
                document.getElementById('cancel-popup').style.display = 'none';  // Menutup cancel popup
            }

            function showConfirmation(event) {
                event.preventDefault();  // Menghentikan pengiriman form
                document.getElementById('confirmation-popup').style.display = 'flex';  // Tampilkan popup
            }

            function closePopup() {
                document.getElementById('confirmation-popup').style.display = 'none';  // Menutup save confirmation popup
            }

            function saveProfile() {
                var newName = document.getElementById('editFullName').value;
                var newUsername = document.getElementById('editUsername').value;
                var newEmail = document.getElementById('editEmail').value;
                var newPhone = document.getElementById('editPhone').value;

                // Update data yang ditampilkan
                document.getElementById('displayName').textContent = newName;
                document.getElementById('displayUsername').textContent = newUsername;
                document.getElementById('displayEmail').textContent = newEmail;
                document.getElementById('displayPhone').textContent = newPhone;

                closePopup();  // Menutup save confirmation popup
                document.getElementById('ownerProfile').style.display = 'flex';  // Menampilkan profil
                document.getElementById('editProfileForm').style.display = 'none';  // Menyembunyikan form edit
                document.getElementById("welcomeMessage").classList.remove("hidden");
            }
        </script>


    </body>
</html>