<?php
    // Username dan password yang telah ditentukan
    $valid_username = "admin";
    $valid_password = "password";

    $error_message = "";

    // Fungsi untuk memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah username dan password telah diisi
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Memeriksa apakah username dan password sesuai
            if ($username === $valid_username && $password === $valid_password) {
                header("Location: ./product.php");
                exit;
            } else {
                // Jika username atau password tidak sesuai, tampilkan pesan kesalahan
                $error_message = "Username atau password salah.";
            }
        } else {
            // Jika salah satu atau kedua field tidak diisi, tampilkan pesan kesalahan
            $error_message = "Username dan password harus diisi.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tautan CSS Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan CSS Kustom -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<!-- Bagian Navbar -->
<nav class="navbar navbar-expand-lg bg-dark  fixed-top shadow-lg" style="--bs-bg-opacity: .5;">
  <div class="container py-2">
    <a class="navbar-brand text-white rounded p-2 fw-bold border border-3 border-primary bg-primary" href="../index.php">Planet <span class="bg-dark rounded p-2">PC</span></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end ms-auto " id="navbarNav">
      <ul class="navbar-nav gap-3 ">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-primary" type="submit">Get Started</button>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<!-- Bagian Form Login -->
<div class="form bg-primary-subtle">
        <div class="container "> 
            <div class="row justify-content-start align-items-center vh-100 ">
                <div class="col-md-5 p-5">
                    <div class="card shadow bg-dark ">
                        <div class="card-header bg-primary text-white p-3 text-center">Enter account details</div>
                        <div class="card-body  p-5">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="mb-3 ">
                                    <label for="username" class="form-label text-white">Username</label>
                                    <input type="text" class="form-control bg-secondary text-white" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-white">Password</label>
                                    <input type="password" class="form-control bg-secondary text-white" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                <!-- Tampilkan pesan kesalahan jika terjadi -->
                                <?php if (!empty($error_message)): ?>
                                    <div class="alert alert-danger mt-3" role="alert">
                                        <?php echo $error_message; ?>
                                    </div>
                                <?php endif; ?>
                                <p class="text-center mt-5 text-white">Don't have an account? <a href="register.php" class="text-primary text-decoration-none fw-bold">Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Bagian Footer -->
<footer class="text-white pt-3 fixed-bottom shadow-top bg-dark "  style="--bs-bg-opacity: .5;">
  <div class="container text-center">
    <p>&copy; 2024 Planet PC. All rights reserved.</p>
  </div>
</footer>

<!-- Tautan JavaScript Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>