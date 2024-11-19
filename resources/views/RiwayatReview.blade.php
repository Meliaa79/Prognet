<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <title>Our Workspace</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- css -->
    <link rel="stylesheet" href="../css/RiwayatReview.css" />

    <!-- bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet"
    />
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
                <a href="../views/LamanPenggunaFix.blade.php" class="flex items-center space-x-3 text-sm">
                    <i class='bx bx-user'></i>
                    <span>Profil</span>
                </a>
            </li>
            <li class="hover:bg-[#814e2b] rounded-lg">
                <a href="../views/bookingmanajemen.blade.php" class="flex items-center space-x-3 text-sm">
                    <i class='bx bx-calendar-check'></i>
                    <span>Booking Management</span>
                </a>
            </li>
            <li class="hover:bg-[#814e2b] rounded-lg">
                <a href="../views/DaftarFavorite.blade.php" class="flex items-center space-x-3 text-sm">
                    <i class='bx bxs-bookmark-heart'></i>
                    <span>Daftar Favorite</span>
                </a>
            </li>
            <li class="hover:bg-[#814e2b] rounded-lg">
                <a href="#" class="flex items-center space-x-3 text-sm">
                    <i class='bx bx-star'></i>
                    <span>Riwayat Review</span>
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

    <div class="main--content transition-all duration-500 ease-in-out ml-[116px] lg:ml-[240px] p-8">
    <div class="header--wrapper mb-1">
        <div class="header--title">
            <h2 class="text-3xl font-semibold">Riwayat Review</h2> 
        </div>
    </div>

    <!-- review Table -->
    <table class="review-table w-full table-auto border-separate border-spacing-0 shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-5 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-gray-600">Nama Cafe</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-gray-600">Ulasan</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-gray-600">Rating</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-gray-600">Tanggal Rating</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <td class="px-5 py-3 text-sm font-medium text-gray-800">1</td>
                <td class="px-5 py-3 text-sm text-gray-800">Rutu Kopi Denpasar</td>
                <td class="px-5 py-3 text-sm text-gray-800">Cafe sangat bersih, wifinya cepat</td>
                <td class="px-5 py-3 text-sm text-gray-800">4.5</td>
                <td class="px-5 py-3 text-sm text-gray-800">9 Oktober 2024</td>
            </tr>
        </tbody>
        <tbody>
            <tr class="border-b border-gray-200">
            <td class="px-5 py-3 text-sm font-medium text-gray-800">1</td>
                <td class="px-5 py-3 text-sm text-gray-800">Jayagiri</td>
                <td class="px-5 py-3 text-sm text-gray-800">Vibesnya adem banget</td>
                <td class="px-5 py-3 text-sm text-gray-800">4</td>
                <td class="px-5 py-3 text-sm text-gray-800">27 September 2024</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>
