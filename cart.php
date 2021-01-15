<?php 
require_once 'config/config.php';

if (!isset($_SESSION["login"]) && !isset($_SESSION["user"])) {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Cart | Toko Supplier Daging Ayam Segar</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="assets/style/main.css" rel="stylesheet" />
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="/index.html" class="navbar-brand">
        <img src="assets/images/logo.jpg" class="w-50" alt="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collpase navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/products.html" class="nav-link">All Products</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">About</a>
          </li>
        </ul>

        <!-- dekstop menu -->
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
              <img src="assets/images/user_pc.png" alt="profile" class="rounded-circle mr-2 profile-picture">
              Hi, Hafizh
            </a>
            <div class="dropdown-menu">
              <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
              <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
              <div class="dropdown-divider"></div>
              <a href="/" class="dropdown-item">logout</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link d-inline-bloc mt-2">
              <img src="assets/images/shopping-cart-filled.svg" alt="cart-empty">
              <div class="cart-badge">7</div>
            </a>
          </li>
        </ul>

        <!-- mobile app -->
        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="" class="nav-link">
              Hi, Hafizh
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link d-inline-block">
              Cart
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- page content -->
  <div class="page-content page-cart">
    <section class="store-breadcrumb" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name &amp; Seller</th>
                  <th>Price</th>
                  <th>Menu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 20%;">
                    <img src="assets/images/1.jpg" alt="" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Kepala Ayam Jago</div>
                    <div class="product-subtitle">1 Kg</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Rp. 40.000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="" class="btn btn-remove text-white btn-block px-3">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%;">
                    <img src="assets/images/2.jpg" alt="" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Paha Ayam Gede</div>
                    <div class="product-subtitle">500 Gram</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Rp. 20.000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 25%;">
                    <a href="" class="btn btn-remove text-white btn-block px-3">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td style="width: 20%;">
                    <img src="assets/images/3.jpg" alt="" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Ceker Ayam Lunak</div>
                    <div class="product-subtitle">1 Kg</div>
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Rp. 50.000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 25%;">
                    <a href="" class="btn btn-remove text-white btn-block px-3">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <h2 class="mb-2">
              Payment Information
            </h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-subtitle mb-3">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">$200</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$580</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$392,489</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success btn-block px-4 mt-1">Checkout Now</a>
          </div>
        </div>
      </div>
    </section>





    <footer>
      <div class=" container">
        <div class="row">
          <div class="col-12">
            <p class="pt-4 pb-2">&copy; 2021 Copyright by Elza Mandiri. All Rights Reserved.</p>
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