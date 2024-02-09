<?php include "header-login.php"; ?>
<form action="proses-login.php" method="post">
  <div class="form-group">
    <label for="username">Nama Pengguna:</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Kata Sandi:</label>
    <div class="input-group">
      <input type="password" class="form-control" id="password" name="password" required>
      <div class="input-group-append">
        <button type="button" class="btn btn-outline-secondary" id="togglePassword"> Tampilkan Kata Sandi </button>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Masuk</button>
  <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
</form>

<script>
  var togglePassword = document.getElementById("togglePassword");
  var passwordInput = document.getElementById("password");

  togglePassword.addEventListener("click", function () {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      togglePassword.textContent = "Sembunyikan Kata Sandi";
    } else {
      passwordInput.type = "password";
      togglePassword.textContent = "Tampilkan Kata Sandi";
    }
  });
</script>
<?php include "footer-login.php"; ?>