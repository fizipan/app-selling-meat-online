<?php 
require_once 'config/config.php';

if (isset($_SESSION["user"])) {
  $id = $_SESSION["user"];
  $result = query("SELECT * FROM users WHERE id_user = $id")[0];
  if ($result['roles'] == 'ADMIN') {
    header("Location: admin");
  } elseif($result["roles"] == 'OWNER') {
    header("Location: owner");
  }
}

if (isset($_SESSION["driver"])) {
  header("Location: driver");
} 


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Toko Supplier Daging Ayam Segar</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="assets/style/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="index.php" class="navbar-brand" title="home">
          <img src="assets/images/logo.jpg" class="w-50" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collpase navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">All Products</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <?php
            if (!isset($_SESSION["login"]) && !isset($_SESSION["user"])) : ?>
              <li class="nav-item">
                <a href="register.php" class="nav-link">Sign Up</a>
              </li>
              <li class="nav-item">
                <a
                  href="login.php"
                  class="btn btn-success nav-link px-4 text-white"
                  >Sign In</a
                >
              </li>
            <?php else: ?>
              <li class="nav-item dropdown">
                <?php 
                  $id = $_SESSION["user"];
                  $user = query("SELECT * FROM users WHERE id_user = $id")[0];
                ?>
                  <a
                    href="#"
                    class="nav-link font-weight-bold"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <!-- <img
                      src="../assets/images/user_pc.png"
                      alt="profile"
                      class="rounded-circle mr-2 profile-picture"
                    /> -->
                    Hi, <?= $user["name"]; ?>
                  </a>
                  <div class="dropdown-menu">
                    <?php if ($user["roles"] == 'ADMIN') : ?>
                        <a href="admin" class="dropdown-item">
                          Dashboard
                        </a>
                    <?php else : ?>
                        <a href="user" class="dropdown-item">
                          Dashboard
                        </a>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">logout</a>
                  </div>
              </li>
              <li class="nav-item">
                <?php 
                  $id = $user["id_user"];
                  $carts = rows("SELECT * FROM carts WHERE user_id = $id");
                ?>
                <?php if ($carts >= 1) : ?>
                  <a href="cart.php" class="nav-link d-inline-block">
                    <img
                      src="assets/images/shopping-cart-filled.svg"
                      alt="cart-empty"
                    />
                    <div class="cart-badge"><?= $carts; ?></div>
                  </a>
                <?php else : ?>
                  <a href="cart.php" class="nav-link d-inline-block">
                    <img
                      src="assets/images/icon-cart-empty.svg"
                      alt="cart-empty"
                    />
                  </a>
                <?php endif; ?>
              </li>
            <?php endif;?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- page content -->
    <div class="page-home" data-aos="zoom-in">
      <section class="store-landing" style="background-color: #F8F6F3; background-attachment: fixed; padding: 150px 0 150px 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class="" style="font-size: 60px;">Elza Mandiri</h1>
              <h5 class="">Toko Daging Ayam Potong Segar Online</h5>
              <a
                  href="login.php"
                  class="btn btn-success mt-2 px-4 py-2 text-white"
                  >No Whatsapp</a
                >
            </div>
          </div>
        </div>
      </section>
      <section class="store-adventeges" id="adventeges">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <h2 class="font-weight-bold mb-2">Elza Mandiri</h2>   
              <hr style="border-top: 5px solid black; width: 80px;">
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-12">
              <p>CV. Elza mandiri merupakan perusahaan yang bergerak di dalam bidang pemotongan hewan ayam dan perdagangan ayam potong, CV. Elza Mandiri mandiri berkantor di Pengasinan, Gunung Sindur, Bogor pada saat ini CV. Elza Mandiri fokus melakukan perdagangan/suplay ayam potong kebeberapa perusahaan industri pengolahan ayam, juga rutin mengisi beberapa pedagang pasar di area Jabotabek CV. Elza Mandiri mandiri bervisi menciptakan sinergi kemitraaan yang saling menguntungkan dan berkeadilan memiliki sumber daya manusia yang professional, disiplin, handal, dan setia yang akan menghadirkan ayam dengan kualitas Aman, Sehat, Utuh dan Halal (ASUH) terbaik. CV. Elza Mandiri terdaftar di Kementrian Hukum dan Hak Asasi Manusia Republik Indonesia Direktorat Jenderal Administrasi Hukum Umum dengan Nomor AHU-0005973-AH-01-15 Tahun 2019 melalui Kantor Notaris  Awendi Kamuli, SH.</p>
            </div>
          </div>
          <div class="row text-center" style="margin-top: 100px;">
            <div class="col-12">
              <h2 class="font-weight-bold">Visi dan Misi</h2>
              <hr style="border-top: 5px solid black; width: 80px;">
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <h5>Visi</h5>
                <p>Menjadi perusahaan pemotongan hewan dan perdagangan terbaik seindonesia yang akan menghasilkan layanan serta produk berkualitas tinggi</p>
            </div>
            <div class="col-md-6">
                <h5>Misi</h5>
                <p>Meningkatkan daya saing industri pengolahan ayam dan perdagangannya Meningkatkan kesejahteraan peternak ayam dan berusaha mengurangi pengangguran dan kemiskinan</p>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="counter text-white" style="background-color: #001524; padding: 40px; margin-top: 100px;" id="counter">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h3>Numbers Speak For Themeselves</h3>
            </div>
            <div class="col-md-3">
              <h3 id="terjual"></h3>
            </div>
          </div>
        </div>
      </section> -->
    </div>

    <br>
    <br><br><br><br>
    <br>
    <br><br><br><br>
    <!-- akhir slider -->

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p class="pt-4 pb-2">
              &copy; 2021 Copyright by Elza Mandiri. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.slim.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/navbar-scroll.js"></script>
  </body>
</html>
