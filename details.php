<?php 
require_once 'config/config.php';
$idProduct = $_GET["id"];
$product = query("SELECT * FROM products INNER JOIN units ON products.unit_id = units.id WHERE id_product = $idProduct")[0];
$galleries = query("SELECT * FROM products_galleries INNER JOIN products ON products_galleries.product_id = products.id_product WHERE products_galleries.product_id = $idProduct");    

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

    <title>Details | Toko Supplier Daging Ayam Segar</title>

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
        <a href="index.php" class="navbar-brand">
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
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link">All Products</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
          </ul>

          <!-- dekstop menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="assets/images/user_pc.png"
                  alt="profile"
                  class="rounded-circle w-25 mr-2 profile-picture"
                />
                Hi, Hafizh
              </a>
              <div class="dropdown-menu">
                <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                <a href="/dashboard-account.html" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link d-inline-block">
                <img src="assets/images/icon-cart-empty.svg" alt="cart-empty" />
              </a>
            </li>
          </ul>

          <!-- mobile app -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="" class="nav-link"> Hi, Hafizh </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link d-inline-block"> Cart </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- page-content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumb"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb bg-transparent">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Products Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  alt=""
                  class="thumbnail-image w-100"
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1><?= $product["product_name"]; ?></h1>
                <div class="owner"><?= $product["unit_name"]; ?></div>
                <div class="price">Rp. <?= number_format($product["price"]); ?></div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3 py-2"
                >
                  Add to cart
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  <?= $product["descriptions"]; ?>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

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
    <script src="assets//vendor/jquery/jquery.slim.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 1,
          photos: [
            <?php foreach ($galleries as $gallery) : ?>
            {
              id: <?= $gallery["id_gallery"] ?>,
              url: "assets/images/<?= $gallery["photos"] ?>",
            },
            <?php endforeach; ?>
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    <script src="assets/js/navbar-scroll.js"></script>
  </body>
</html>
