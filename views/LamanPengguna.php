<?php
require_once "controllerUserData.php";

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    header('Location: login-user.php'); // Redirect ke halaman login jika belum login
    exit();
}

// Ambil email dari sesi
$email = $_SESSION['email'];

// Ambil data pengguna dari database
$query = "SELECT * FROM usertable WHERE email = '$email'";
$result = mysqli_query($db, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
} else {
    // Jika tidak ada data pengguna
    $userData = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Workspace</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/LamanPengguna.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body style="background-color: #fff8f0">
    <!-- lamanUser -->
    <ls class="sidebar">
        <div class="logo">
            <img src="../img/Logo nobg.png" alt="" style="width: 60%" />
        </div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="bi bi-person-circle"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tachmometer-alt"></i>
                    <span>Booking Management</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tachmometer-alt"></i>
                    <span>Daftar Favorite</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tachmometer-alt"></i>
                    <span>Riwayat Review</span>
                </a>
            </li>
            <li class="logout">
                <a href="../style/dashboard.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </ls>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Welcome, <?php echo $userData['fullname']; ?>!</h2> 
                <p>Manage your account details and settings here</p>
            </div>
        </div>
        <div class="user--profile">
            <div class="user--property">
                <img src="../img/vintage icon.jpeg" alt="" />
                <div class="user--detail">
                    <h3>Profile Information</h3>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>Full Name:</strong> <?php echo $userData['fullname']; ?>
                        </div>
                        <div class="detail-item"><strong>Username:</strong> <?php echo $userData['username']; ?></div>
                        <div class="detail-item">
                            <strong>Email:</strong> <?php echo $userData['email']; ?>
                        </div>
                        <div class="detail-item">
                            <strong>Phone Number:</strong> <?php echo $userData['phone']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
