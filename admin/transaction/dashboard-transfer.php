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
      <h2 class="dashboard-title">Foto Bukti Transfer</h2>
      <p class="dashboard-subtitle">Bukti transfer pelanggan</p>
    </div>
    <div class="dashboard-content">
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <?php 
                  $id_transaction = $_GET["id"];
                  $transaction = query("SELECT * FROM transactions INNER JOIN rekening_numbers ON transactions.rekening_id = rekening_numbers.id_rekening INNER JOIN users ON transactions.user_id = users.id_user WHERE id_transaction = $id_transaction")[0];
                ?>
                <div class="col-12">
                  <h5 class="mb-4">Transfer Pelanggan</h5>
                  <hr>
                  <div class="mb-2">
                    Nama Pengirim : <strong><?= $transaction["name"]; ?></strong>
                  </div>
                  <div>
                    Bukti Transfer :
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-4">
                  <img src="../assets/images/<?= $transaction["photo_transaction"]; ?>" class="w-50" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
