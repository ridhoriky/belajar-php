<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tautan CSS Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan CSS Kustom -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Bagian Navbar -->
<nav class="navbar navbar-expand-lg bg-dark  fixed-top shadow-lg" style="--bs-bg-opacity: .5;">
  <div class="container py-2">
    <a class="navbar-brand text-white rounded p-2 fw-bold border border-3 border-primary bg-primary" href="./index.php">Planet <span class="bg-dark rounded p-2">PC</span></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end ms-auto " id="navbarNav">
      <ul class="navbar-nav gap-3 ">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/product.php">Product</a>
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

<!-- Bagian Content -->
<main class="form  bg-primary-subtle">
  <div class="container "> 
    <div class="row justify-content-start align-items-center vh-100 ">
        <div class="col-md-2 p-5">
            <div class="card shadow bg-dark ">
                <button class="btn btn-primary "><a href="./pages/login.php" class="text-white text-decoration-none">Login</a></button>
              </div>
          </div>
        <div class="col-md-2 p-5">
            <div class="card shadow bg-dark ">
            <button class="btn btn-outline-primary "><a href="./pages/product.php" class="text-white text-decoration-none">Product</a></button>
              </div>
          </div>
      </div>
    </div>
</main>

<!-- Bagian Footer -->
<footer class="text-white pt-3 fixed-bottom shadow-top bg-dark "  style="--bs-bg-opacity: .5;">
  <div class="container text-center">
    <p>&copy; 2024 Planet PC. All rights reserved.</p>
  </div>
</footer>

<!-- Tautan JavaScript Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>