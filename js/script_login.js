// Mengambil elemen
const showPasswordCheckbox = document.getElementById("showPassword");
const passwordInput = document.getElementById("password");
const loginForm = document.getElementById("loginForm");

// Menambahkan event listener untuk checkbox
showPasswordCheckbox.addEventListener("change", function () {
  passwordInput.type = this.checked ? "text" : "password";
});

// Menangani pengiriman form
loginForm.addEventListener("submit", function (event) {
  event.preventDefault(); // Mencegah form dari pengiriman default

  const username = document.getElementById("username").value;
  const password = passwordInput.value;

  // Cek username dan password
  if (username === "Batara" && password === "2017") {
    // Jika benar, arahkan ke user.html
    window.location.href = "user.html";
  } else {
    // Jika salah, tampilkan alert
    Swal.fire({
      title: "Wrong !",
      text: "username atau password salah",
      icon: "error",
    });
  }
});
