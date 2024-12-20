<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <title>Our Workspace</title>

    <!-- css -->
    <link rel="stylesheet" href="../style/ListBookOwner.css" />

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
  </head>

  <body style="background-color: #fff8f0">
    <!-- lamanUser -->
    <ls class="sidebar">
      <div class="logo">
        <img src="../asset/img/Logo nobg.png" alt="" style="width: 60%" />
      </div>
      <ul class="menu">
        <li class="active">
          <a href="../php/OwnerProfile.php">
            <i class="bi bi-person-circle"></i>
            <span>Profil</i></span>
            
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-tachmometer-alt"></i>
            <span>Booking List</span>
          </a>
        </li>
        <li class="logout">
          <a href="../php/dashboard.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </ls>

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <h2>List Booking</h2>
        </div>
      </div>
      <!-- booking table -->
      <table class="booking-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Booking Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jihoon</td>
                <td>082374657987123</td>
                <td>18 Oktober 2024</td>
                <td>Confirmed</td>
            </tr>
            <tr>
                <td>Haruto</td>
                <td>082374657444444</td>
                <td>30 Oktober 2024</td>
                <td>Pending</td>
            </tr>
        </tbody>
    </table>
    </div>
  </body>
</html>