<?php
// date_default_timezone_get("Asia/Jakarta");

require 'functions.php';

$id = $_GET['id'];
$camaba = query("SELECT * FROM barang WHERE id = $id");
// var_dump($camaba['nama']);
if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "<script>alert('data berhasil di edit');
    document.location.href = 'product.php';
    </script>";
  } else {
    echo "<script>alert('maaf,data anda gagal di edit');
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Your description">
  <meta name="author" content="Your name">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

  <!-- Webpage Title -->
  <title>UNEGO STORE</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome-all.min.css" rel="stylesheet">
  <link href="css/swiper.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="images/unego.png">
</head>

<body>

  <!-- Navigation -->
  <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.php"><img src="images/unego.svg" alt="alternative">UNEGO
        STORE</a>

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text" href="index.php">dimas</a> -->

      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#brand">Brand</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Market</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="product.php">Product</a></li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li><a class="dropdown-item" href="shop.php">Shop</a></li>
              <li>
                <div class="dropdown-divider"></div>
              </li>

            </ul>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
  </nav> <!-- end of navbar -->
  <!-- end of navigation -->


  <!-- Header -->
  <header class="ex-header">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 offset-xl-1">
          <h1>Product Details</h1>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </header> <!-- end of ex-header -->
  <!-- end of header -->

  <!-- basic -->

  <div id="intro" class="basic-1 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div class="text-container">
            <h3> <i class="fas fa-users"></i> Edit Data Barang </h3>
            <hr>

            <form method="POST" action="">

              <input type="hidden" class="form-control" value="<?= $camaba['id'] ?>" name="id">

              <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" value="<?= $camaba['nama'] ?>" placeholder="nama lengkap" name="nama" autofocus required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="harga">Harga :</label>
                <input type="text" class="form-control" id="harga" value="<?= $camaba['harga'] ?>" placeholder="harga" name="harga" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="stok">Stok :</label>
                <input type="text" class="form-control" id="stok" value="<?= $camaba['stok'] ?>" placeholder="Stok" name="stok" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="foto">Foto :</label>
                <input type="text" class="form-control" id="foto" value="<?= $camaba['foto'] ?>" placeholder="foto" name="foto" required autocomplete="off">
              </div>

              <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
            </form>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
        <!-- kanan -->

      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of basic-1.5 -->

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-col first">
            <h6>About UNEGO</h6>
            <p class="p-small">unego didirikan pada tahun 2017,perusahaan ini menggandeng brand indonesia
              ternama </p>
          </div> <!-- end of footer-col -->
          <div class="footer-col second">
            <h6>Links</h6>
            <ul class="list-unstyled li-space-lg p-small">
              <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#projects">Projects</a>
              </li>
            </ul>
          </div> <!-- end of footer-col -->
          <div class="footer-col third">
            <span class="fa-stack">
              <a href="https://wa.me/qr/HHICMNLFMWLGL1">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-whatsapp fa-stack-1x"></i>
              </a>
            </span>
            <span class="fa-stack">
              <a href="https:/instagram.com/dimasnurpras">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x"></i>
              </a>
            </span>
            <p class="p-small">We would love to hear from you <a href="mailto:dimasnurpras@gmail.com"><strong>diamsnurpras@gmail.com</strong></a></p>
          </div> <!-- end of footer-col -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of footer -->
  <!-- end of footer -->


  <!-- Copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="p-small">Copyright © <a href="#your-link">Dimas Nur Prasetyo</a></p>
        </div>

        <div class="col-lg-12">
          <p class="p-small">Distributed by :<a href="https://UNEGOSTORE.com/">UNEGO STORE</a></p>
        </div>
        <!-- end of col -->
      </div> <!-- enf of row -->
    </div> <!-- end of container -->
  </div> <!-- end of copyright -->
  <!-- end of copyright -->


  <!-- Back To Top Button -->
  <button onclick="topFunction()" id="myBtn">
    <img src="images/up-arrow.png" alt="alternative">
  </button>
  <!-- end of back to top button -->

  <!-- Scripts -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
  <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
  <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>