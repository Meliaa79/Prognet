function login() {
  // Logika login dapat ditambahkan di sini
  const username = document.querySelector(
    '#loginFormWrapper input[name="username"]'
  ).value;
  const password = document.querySelector(
    '#loginFormWrapper input[name="password"]'
  ).value;

  console.log("Logging in:", { username, password });
  // Lanjutkan ke halaman login jika perlu
}

function showRegister() {
  // Sembunyikan login dan tampilkan register
  document.getElementById("loginFormWrapper").style.display = "none";
  document.getElementById("registerFormWrapper").style.display = "flex";
}

function showLogin() {
  // Sembunyikan register dan tampilkan login
  document.getElementById("registerFormWrapper").style.display = "none";
  document.getElementById("loginFormWrapper").style.display = "flex";
}

function closeForm() {
  // Sembunyikan semua form
  document.getElementById("loginFormWrapper").style.display = "none";
  document.getElementById("registerFormWrapper").style.display = "none";
}
