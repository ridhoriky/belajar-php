<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tautan ke file Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- CSS Kustom -->
    <style>
        .card {
            border: none;
            height: 520px;
        }
        .card-img-top {
            height: 300px; 
            object-fit: cover; /
        }
    </style>
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

<?php
    // Definisikan data produk dalam bentuk array asosiatif
    $products = array(
        array(
            'nama' => 'CPU Intel Core i9-11900K',
            'harga' => 6000000,
            'deskripsi' => 'Prosesor unggulan untuk gaming dan produktivitas dengan performa luar biasa, dilengkapi dengan teknologi Intel Turbo Boost Max 3.0 dan dukungan overclocking.',
            'img' => '../assets/img/11900K.jpg'
        ),
        array(
            'nama' => 'Monitor ASUS ROG Swift PG279Q',
            'harga' => 8000000,
            'deskripsi' => 'Monitor gaming premium dengan resolusi WQHD 2560 x 1440 piksel, refresh rate 165Hz, dan teknologi G-Sync untuk pengalaman gaming yang mulus.',
            'img' => '../assets/img/monitor_asus_rog.jpg'
        ),
        array(
            'nama' => 'VGA NVIDIA GeForce RTX 3080',
            'harga' => 12000000,
            'deskripsi' => 'Kartu grafis terbaik untuk gaming 4K dan ray tracing, dilengkapi dengan arsitektur Ampere dan memori GDDR6X 10GB.',
            'img' => '../assets/img/vga_3080.jpg'
        )
    );
    ?>

    <!-- Bagian konten -->
    <main class="bg-dark vh-100">
        <div class="container py-5 ">
            <h1 class="text-white py-5">Product</h1>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                                <h5 class="card-title bg-dark p-3 text-white mt-3"><?php echo $product['nama']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rp <?php echo number_format($product['harga']); ?></h6>
                                <p class="card-text"><?php echo $product['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <!-- Bagian Footer -->
    <footer class="text-white pt-3 fixed-bottom shadow-top bg-dark "  style="--bs-bg-opacity: .5;">
    <div class="container text-center">
        <p>&copy; 2024 Planet PC. All rights reserved.</p>
    </div>
    </footer>

    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
