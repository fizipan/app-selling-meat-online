<?php 
require '../config/config.php';

$id = $_GET["id"];
$galleries = query("SELECT * FROM products_galleries INNER JOIN products ON products_galleries.product_id = products.id_product WHERE products_galleries.id_gallery = $id")[0];

if (isset($_POST["updateGaleri"])) {
  if (updateGaleri($_POST) > 0) {
    echo "<script>
            alert('Gallery Berhasil Diubah');
            document.location.href = '?page=galleries';
          </script>";
  } else {
    echo "<script>
            alert('Gallery Gagal Diubah');
            document.location.href = '?page=galleries';
          </script>";
  }
}

?>

<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
  data-aos="fade-down"
>
  <div class="container-fluid">
    <button
      class="btn btn-secondary d-md-none mr-auto mr-2"
      id="menu-toggle"
    >
      &laquo; Menu
    </button>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collpase navbar-collapse" id="navbarResponsive">
      <!-- dekstop menu -->
      <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
          >
            <img
              src="../assets/images/user_pc.png"
              alt="profile"
              class="rounded-circle mr-2 profile-picture"
            />
            Hi, Hafizh
          </a>
          <div class="dropdown-menu">
            <a href="/dashboard.html" class="dropdown-item"
              >Dashboard</a
            >
            <a href="/dashboard-account.html" class="dropdown-item"
              >Settings</a
            >
            <div class="dropdown-divider"></div>
            <a href="/" class="dropdown-item">logout</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link d-inline-bloc mt-2">
            <img
              src="../assets/images/shopping-cart-filled.svg"
              alt="cart-empty"
            />
            <div class="cart-badge">7</div>
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
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title"><?= $galleries["product_name"]; ?></h2>
      <p class="dashboard-subtitle">Galleries Details</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                  <input type="hidden" name="id" value="<?= $galleries["id_gallery"]; ?>">
                  <input type="hidden" name="photoLama" value="<?= $galleries["photos"]; ?>">
                    <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <?php 
                      
                      $products = query("SELECT * FROM products");
                      
                      ?>
                      <select name="name" id="name" class="form-control">
                        <?php foreach ($products as $product) : ?>
                          <option value="<?= $product["id_product"]; ?>" <?= $product["id_product"] == $galleries["product_id"] ? 'selected' : ''; ?>><?= $product["product_name"]; ?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="photo">Photo</label>
                      <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      name="updateGaleri"
                      class="btn btn-success px-4"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>