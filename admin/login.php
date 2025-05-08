<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><br><br><br><br>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="card shadow">
          <div class="row g-0">
            <!-- Logo Section -->
            <div class="col-md-5 d-flex align-items-center justify-content-center  text-white p-4">
              <img src="../gambar/logo.png" alt="Logo" class="img-fluid" style="max-height: 150px;">
            </div>

            <!-- Form Section -->
            <div class="col-md-7 p-4">
              <h4 class="mb-3 text-center">Login Mode Admin</h4>

              <!-- Alert jika login gagal -->
              <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">
                  Username atau password salah!
                </div>
              <?php endif; ?>

              <form method="POST" action="proses_login.php">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

