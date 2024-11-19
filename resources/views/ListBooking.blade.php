<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Our Workspace</title>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- css -->
        <link rel="stylesheet" href="../css/ListBookOwner.css" />

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
                --primary: #814e2b;
                --secondary: #593b1f;
                --bg-light: #fff8f0;
                --text-light: #fff;
                --text-dark: #593b1f;
                --border: #e0e0e0;
            }
        </style>
    </head>

    <body class="bg-[#fff8f0] font-poppins">
        <!-- Sidebar -->
        <aside class="sidebar fixed top-0 left-0 bottom-0 w-[116px] h-screen p-[1.7rem] bg-[#734424] text-[#fff8f0] transition-all duration-500 ease-in-out lg:w-[240px] hover:w-[240px]">
            <div class="logo mb-6">
                <img src="../img/Logo nobg.png" alt="Logo" class="w-[60%]" />
            </div>
            <ul class="menu h-[88%] relative space-y-4">
                <li class="hover:bg-[#814e2b] rounded-lg">
                    <a href="../views/OwnerProfile.blade.php" class="flex items-center space-x-3 text-sm">
                        <i class='bx bx-user'></i>
                        <span>Profil</span>
                    </a>
                </li>
                <li class="hover:bg-[#814e2b] rounded-lg">
                    <a href="../views/bookingmanajemen.blade.php" class="flex items-center space-x-3 text-sm">
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

        <div class="main--content transition-all duration-500 ease-in-out ml-[116px] lg:ml-[240px] p-8">
        <div class="header--wrapper mb-1">
            <div class="header--title">
                <h2 class="text-3xl font-semibold">List Booking</h2>
            </div>
        </div>

        <!-- ListBooking Table -->
        <table class="review-table w-full table-auto border-separate border-spacing-0 shadow-md rounded-lg overflow-hidden">
        <thead style="background-color: #8b5e3c;">
            <tr>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">No</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Name</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Phone Number</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Booking Date</th>
                <th class="px-5 py-3 text-left text-sm font-semibold text-white">Status</th>
            </tr>
        </thead>
            <tbody>
                <tr class="border-b border-gray-200">
                    <td class="px-5 py-3 text-sm font-medium text-gray-800">1</td>
                    <td class="px-5 py-3 text-sm text-gray-800">Jihoon</td>
                    <td class="px-5 py-3 text-sm text-gray-800">082374657987123</td>
                    <td class="px-5 py-3 text-sm text-gray-800">18 Oktober 2024</td>
                    <td class="px-5 py-3 text-sm text-gray-800">
                        <select class="bg-yellow-500 text-white rounded px-2 py-1" onchange="this.style.backgroundColor=this.value=='Confirmed'?'green':'#ffcc00';">
                            <option value="Pending" selected>Pending</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                    </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td class="px-5 py-3 text-sm font-medium text-gray-800">2</td>
                    <td class="px-5 py-3 text-sm text-gray-800">Haruto</td>
                    <td class="px-5 py-3 text-sm text-gray-800">082374657444444</td>
                    <td class="px-5 py-3 text-sm text-gray-800">12 Oktober 2024</td>
                    <td class="px-5 py-3 text-sm text-gray-800">
                        <select class="bg-green-500 text-white rounded px-2 py-1" onchange="this.style.backgroundColor=this.value=='Confirmed'?'green':'#ffcc00';">
                            <option value="Pending">Pending</option>
                            <option value="Confirmed" selected>Confirmed</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </body>
</html>
