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
        <a href="/index.html" class="navbar-brand" title="home">
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
            <?php endif;?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- page content -->
    <div class="page-content page-home" style="" data-aos="zoom-in">
      <section class="store-landing">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md-5">
              <img src="assets/images/bg-landing.jpg" class="w-100" alt="" />
            </div>
            <div class="col-md-6">
              <h1>Toko Daging Ayam Potong Segar Online</h1>
              <p class="store-subtitle-landing">
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
      <section class="store-adventeges" id="adventeges">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-adventeges">Kelebihan Belanja Disini</div>
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
      <section class="store-products-kilogram">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Daging Kemasan 1 Kilogram</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/1.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Ayam Segar</div>

                    <div class="products-price">Rp. 50,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/2.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Kerongkongan Ayam</div>

                    <div class="products-price">Rp. 20,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/3.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Kepala Ayam Batin</div>

                    <div class="products-price">Rp. 80,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/4.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Sayap Ayam Tebel</div>

                    <div class="products-price">Rp. 100,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/5.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Dada Ayam Besar</div>

                    <div class="products-price">Rp. 150,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/6.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Ceker Ayam Wenak</div>

                    <div class="products-price">Rp. 30,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/7.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Tanpa Tulang</div>

                    <div class="products-price">Rp. 250,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/8.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Utuh</div>

                    <div class="products-price">Rp. 350,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">1 Kilogram</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="store-products-gram">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Daging Kemasan 500 Gram</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/1.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Ayam Segar</div>

                    <div class="products-price">Rp. 50,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/2.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Kerongkongan Ayam</div>

                    <div class="products-price">Rp. 20,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/3.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Kepala Ayam Jago</div>

                    <div class="products-price">Rp. 80,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/4.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Sayap Ayam Tebel</div>

                    <div class="products-price">Rp. 100,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/5.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Dada Ayam Besar</div>

                    <div class="products-price">Rp. 150,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/6.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Ceker Ayam Wenak</div>

                    <div class="products-price">Rp. 30,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/7.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Tanpa Tulang</div>

                    <div class="products-price">Rp. 250,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="background-image: url('assets/images/8.jpg')"
                  ></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="products-text">Paha Utuh</div>

                    <div class="products-price">Rp. 350,000</div>
                  </div>
                  <div>
                    <div class="products-unit m-0">500 Gram</div>
                  </div>
                </div>
              </a>
            </div>
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
