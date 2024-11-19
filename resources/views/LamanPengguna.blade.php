<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <title>Our Workspace</title>

    <!-- css -->
    <link rel="stylesheet" href="../style/LamanPengguna.css" />
    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
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

  <body style="background-color: #fff8f0">
    <!-- lamanUser -->
    <ls class="sidebar">
      <div class="logo">
        <img src="../asset/img/Logo nobg.png" alt="" style="width: 60%" />
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
            <h2>Welcome, Jihoon-!!</h2>
            <p>Manage your account details and settings here</p>
        </div>
      </div>
      <div id="userProfile" class="user--profile--view">
        <div class="user--property">
            <img src="../asset/img/vintage icon.jpeg" alt="Profile Picture" class="image"/>
        </div>
        <div class="user-detail">
          <div class="detail-grid">
            <div class="detail-item">
              <strong>Full Name:</strong> <span id="displayName">Park Jihoon</span>
            </div>
            <div class="detail-item">
              <strong>Username:</strong> <span id="displayUsername">@jihoon</span>
            </div>
            <div class="detail-item">
              <strong>Email:</strong> <span id="displayEmail">jihoon@gmail.com</span>
            </div>
            <div class="detail-item">
              <strong>Phone Number:</strong> <span id="displayPhone">082347567893222</span>
            </div>
            <button class="btn btn-primary px-1 py-1" onclick="showEditForm()">Edit Data</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Profile Form -->
    <div id="editProfileForm" class="user--profile--edit" style="display: none;">
        <div class="user--property--update">
          <h1>Update Data</h1>
        </div>
        <form id="updateForm" class="detail-grid" onsubmit="showConfirmation(event)">
          <div class="detail-item">
            <label><strong>Full Name:</strong></label>
              <input type="text" name="fullName" id="editFullName" value="Park Jihoon" required />
          </div>
          <div class="detail-item">
            <label><strong>Username:</strong></label>
              <input type="text" name="username" id="editUsername" value="@jihoon" required />
          </div>
          <div class="detail-item">
            <label><strong>Email:</strong></label>
              <input type="email" name="email" id="editEmail" value="jihoon@gmail.com" required />
          </div>
          <div class="detail-item">
            <label><strong>Phone Number:</strong></label>
              <input type="text" name="phoneNumber" id="editPhone" value="082347567893222" required />
          </div>
          <div class="button-group">
            <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>

    <!-- Pop-up Konfirmasi -->
    <div id="confirmation-popup" class="popup" style="display: none;">
        <div class="popup-content">
            <p>Apakah Anda yakin ingin menyimpan perubahan?</p>
            <button onclick="saveProfile()">Ya</button>
            <button onclick="closePopup()">Tidak</button>
        </div>
    </div>

    <script>
        function showEditForm() {
            document.getElementById('userProfile').style.display = 'none';
            document.getElementById('editProfileForm').style.display = 'block';
        }

        function cancelEdit() {
            if (confirm("Are you sure you want to cancel the changes?")) {
                document.getElementById('userProfile').style.display = 'block';
                document.getElementById('editProfileForm').style.display = 'none';
            }
        }

        // Show confirmation pop-up when saving changes
        function showConfirmation(event) {
            event.preventDefault();  // Prevent form from submitting immediately
            document.getElementById('confirmation-popup').style.display = 'flex';  // Show pop-up
        }

        function closePopup() {
            document.getElementById('confirmation-popup').style.display = 'none';  // Close the pop-up
        }

        // Save the profile changes and update the displayed profile
        function saveProfile() {
            // Get new values from the form
            var newName = document.getElementById('editFullName').value;
            var newUsername = document.getElementById('editUsername').value;
            var newEmail = document.getElementById('editEmail').value;
            var newPhone = document.getElementById('editPhone').value;

            // Update the displayed profile data
            document.getElementById('displayName').textContent = newName;
            document.getElementById('displayUsername').textContent = newUsername;
            document.getElementById('displayEmail').textContent = newEmail;
            document.getElementById('displayPhone').textContent = newPhone;

            // Close pop-up and return to profile view
            closePopup();
            document.getElementById('userProfile').style.display = 'block';
            document.getElementById('editProfileForm').style.display = 'none';
        }
    </script>
  </body>
</html>
