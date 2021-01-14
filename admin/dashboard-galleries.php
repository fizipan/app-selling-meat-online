<?php 
require '../config/config.php';

?>
<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
  <div class="container-fluid">
    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
      &laquo; Menu
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collpase navbar-collapse" id="navbarResponsive">

      <!-- dekstop menu -->
      <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
            <img src="../assets/images/user_pc.png" alt="profile" class="rounded-circle mr-2 profile-picture">
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
            <img src="../assets/images/shopping-cart-filled.svg" alt="cart-empty">
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
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Products Galleries</h2>
      <p class="dashboard-subtitle">Manage Your Product Galleries</p>
    </div>
    <div class="dashboard-content">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-12">
                <a href="?page=galleries-create" class="btn btn-success">
                  + Add New Galleries
                </a>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover w-100" id="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Produk</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no = 1;
                          $query = "SELECT * FROM products_galleries INNER JOIN products ON products_galleries.product_id = products.id";
                          $products = query($query);
                        ?>
                        <?php foreach ($products as $product) : ?>
                          <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $product["product_name"]; ?></td>
                            <td><img src="../assets/images/<?= $product["photos"]; ?>" style="max-height: 60px;" alt=""></td>
                            <td style="width: 15%;">
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="?page=products-details&id=<?= $product["id"]; ?>">Edit</a>
                                  <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Delete</button>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <?php $no++ ?>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
