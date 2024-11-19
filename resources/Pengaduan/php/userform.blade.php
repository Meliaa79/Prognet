<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- css -->
    <link rel="stylesheet" href="../css/bookingmanajemen.css" />

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
            --primary: #548CA8; /* Primary color */
            --secondary: #334257; /* Adjusted secondary color */
            --bg-light: #96B6C5; /* Background color */
            --text-light: #fff; /* Light text color */
            --text-dark: #334257; /* Dark text color */
            --border: #e0e0e0; /* Border color */
            /* Add more colors as needed */
        }
    </style>
</head>
<body class="bg[#fffff] font-poppins">
<div class="flex h-screen">
<div class="flex h-screen bg-repeating-gradient">
    <!-- Sidebar -->
    <aside class="sidebar fixed top-0 left-0 bottom-0 w-[116px] h-screen p-[1.7rem] bg-[var(--bg-light)] text-[var(--text-dark)] transition-all duration-500 ease-in-out lg:w-[240px] hover:w-[240px]">
        <!-- Logo -->
        <div class="logo mb-6">
            <img src="../asset/Suarakita-removebg-preview.png" alt="Logo" class="w-[60%]" />
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
                <a href="#" class="flex items-center space-x-3 text-sm">
                    <i class='bx bx-calendar-check'></i>
                    <span>Form Pengaduan</span>
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
    <div class="ml-[116px] lg:ml-[240px] flex-1 bg-[#fffff] p-10 transition-all duration-500 ease-in-out">
        <h1 class="text-2xl font-semibold mb-6 text-[var(--text-dark)]">Form Pengaduan</h1>
        <form action="{{ route('pengaduan.store') }}" method="POST" class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-6">
                <label for="nama" class="block text-sm font-medium text-[var(--text-dark)]">Nama:</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full border-[var(--border)] rounded-md shadow-sm focus:ring-[var(--primary)] focus:border-[var(--primary)]">
            </div>
            <div class="col-span-12 md:col-span-6">
                <label for="email" class="block text-sm font-medium text-[var(--text-dark)]">Email:</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border-[var(--border)] rounded-md shadow-sm focus:ring-[var(--primary)] focus:border-[var(--primary)]">
            </div>
            <div class="col-span-12 md:col-span-6">
                <label for="tanggal" class="block text-sm font-medium text-[var(--text-dark)]">Tanggal Pengaduan:</label>
                <div class="flex space-x-2">
                    <input type="number" name="tahun" placeholder="Tahun" class="w-1/3 border-[var(--border)] rounded-md focus:ring-[var(--primary)] focus:border-[var(--primary)]">
                    <input type="number" name="bulan" placeholder="Bulan" class="w-1/3 border-[var(--border)] rounded-md focus:ring-[var(--primary)] focus:border-[var(--primary)]">
                    <input type="number" name="hari" placeholder="Hari" class="w-1/3 border-[var(--border)] rounded-md focus:ring-[var(--primary)] focus:border-[var(--primary)]">
                </div>
            </div>
            <div class="col-span-12 md:col-span-6">
                <label for="judul" class="block text-sm font-medium text-[var(--text-dark)]">Judul Pengaduan:</label>
                <input type="text" id="judul" name="judul" class="mt-1 block w-full border-[var(--border)] rounded-md shadow-sm focus:ring-[var(--primary)] focus:border-[var(--primary)]">
            </div>
            <div class="col-span-12">
                <label for="alamat" class="block text-sm font-medium text-[var(--text-dark)]">Alamat:</label>
                <textarea id="alamat" name="alamat" class="mt-1 block w-full border-[var(--border)] rounded-md shadow-sm focus:ring-[var(--primary)] focus:border-[var(--primary)]"></textarea>
            </div>
            <div class="col-span-12">
                <label for="deskripsi" class="block text-sm font-medium text-[var(--text-dark)]">Deskripsi Pengaduan:</label>
                <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full border-[var(--border)] rounded-md shadow-sm focus:ring-[var(--primary)] focus:border-[var(--primary)]"></textarea>
            </div>
            <div class="col-span-12">
                <button type="submit" class="w-full bg-[var(--primary)] text-[var(--text-light)] py-2 rounded-md shadow-sm hover:bg-opacity-90">Submit</button>
            </div>
        </form>
    </div>
</div>



    
    
</body>
</html>