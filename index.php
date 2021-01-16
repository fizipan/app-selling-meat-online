<?php 
require_once 'config/config.php';

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
              <a href="" class="nav-link">About</a>
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
    <div class="page-content page-home" data-aos="zoom-in">
      <section class="store-landing">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md-5">
              <img src="assets/images/bg-landing.jpg" class="w-100" alt="" />
            </div>
            <div class="col-md-6">
              <h1 style="font-weight: bold; margin-bottom: 15px;">Toko Daging Ayam Potong Segar Online</h1>
              <p class="store-subtitle-landing" style="line-height: 28px; color: rgb(146, 146, 146);">
                Elza Mandiri adalah toko daging yang menjual daging Ayam segar,
                daging olahan dan bumbu pelengkap resep makanan olahan dari
                bahan baku daging segar
              </p>
              <a href="products.html" class="btn btn-success px-4 py-2 mt-4"
                >Shop Now</a
              >
            </div>
          </div>
        </div>
      </section>
      <section class="store-adventeges" style="margin-top: 100px;" id="adventeges">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-adventeges" style="text-align: center; font-size: 24px; font-weight: 600; margin-bottom: 20px;">Kelebihan Belanja Disini</div>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4"
              data-aos="fade-down"
              data-aos-delay="100"
            >
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row justify-content-center align-content-center">
                    <div class="col-10 col-md-4">
                      <div class="adventeges-thumbnail mb-lg-0 mb-2">
                        <img
                          src="assets/images/fast.svg"
                          class="w-100"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div
                        class="adventege-description text-center text-lg-left"
                      >
                        <div class="title-text">Fast Delivery</div>
                        <div class="subtitle-text">
                          Sed porttitor lectus nibh in faucibus orci
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-6 col-md-4"
              data-aos="fade-down"
              data-aos-delay="200"
            >
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row justify-content-center align-content-center">
                    <div class="col-10 col-md-4">
                      <div class="adventeges-thumbnail mb-lg-0 mb-2">
                        <img
                          src="assets/images/money.svg"
                          class="w-100"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div
                        class="adventege-description text-center text-lg-left"
                      >
                        <div class="title-text">More Efficient</div>
                        <div class="subtitle-text">
                          Sed porttitor lectus nibh in faucibus orci
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-6 col-md-4"
              data-aos="fade-down"
              data-aos-delay="300"
            >
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row justify-content-center align-content-center">
                    <div class="col-10 col-md-4">
                      <div class="adventeges-thumbnail mb-lg-0 mb-2">
                        <img src="assets/images/env.svg" class="w-100" alt="" />
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div
                        class="adventege-description text-center text-lg-left"
                      >
                        <div class="title-text">Environment Friendly</div>
                        <div class="subtitle-text">
                          Sed porttitor lectus nibh in faucibus orci
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-products-kilogram" style="margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5 style="font-weight: 600; margin-bottom: 15px;">Daging Kemasan 1 Kilogram</h5>
            </div>
          </div>
          <div class="row">
            <?php 
            $products1Kg = query("SELECT * FROM products INNER JOIN units ON products.unit_id = units.id WHERE unit_id = 2 LIMIT 8");
            $iteration = 0;
            ?>

            <?php foreach ($products1Kg as $product1Kg) : ?>
            <?php 
            $idProduct = $product1Kg["id_product"];
            $galleries1Kg = query("SELECT * FROM products_galleries INNER JOIN products ON products_galleries.product_id = products.id_product WHERE products_galleries.product_id = $idProduct");    
            ?>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="<?= $iteration += 100; ?>"
              >
                <a href="details.php?id=<?= $idProduct; ?>" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url('assets/images/<?= $galleries1Kg[0]["photos"] ?>')"
                    ></div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div class="products-text"><?= $product1Kg["product_name"]; ?></div>

                      <div class="products-price">Rp. <?= number_format($product1Kg["price"]); ?></div>
                    </div>
                    <div>
                      <div class="text-muted"><?= $product1Kg["unit_name"]; ?></div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      <section class="store-products-gram" style="margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5 style="font-weight: 600; margin-bottom: 15px;">Daging Kemasan 500 Gram</h5>
            </div>
          </div>
          <div class="row">
          <?php 
            $products500G = query("SELECT * FROM products INNER JOIN units ON products.unit_id = units.id WHERE unit_id = 1 LIMIT 8");
            ?>
            <?php foreach ($products500G as $product500G ) : ?>
            <?php 
            $idProduct = $product500G["id_product"];
            $galleries500G = query("SELECT * FROM products_galleries INNER JOIN products ON products_galleries.product_id = products.id_product WHERE products_galleries.product_id = $idProduct");  
            ?>
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="<?= $iteration += 100; ?>"
              >
                <a href="details.php?id=<?= $idProduct; ?>" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                      style="background-image: url('assets/images/<?= $galleries500G[0]["photos"] ?>')"
                    ></div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div class="products-text"><?= $product500G["product_name"]; ?></div>

                      <div class="products-price">Rp. <?= number_format($product500G["price"]) ?></div>
                    </div>
                    <div>
                      <div class="text-muted"><?= $product500G["unit_name"]; ?></div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
    </div>
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
