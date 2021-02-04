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
              src="../assets/images/person-circle.svg"
              alt="profile"
              height="40px"
              class="rounded-circle mr-2 profile-picture"
            />
            <?php 
              $id_user = $_SESSION['user'];
              $user = query("SELECT * FROM users WHERE id_user = $id_user")[0];
            ?>
            Hi, <?= $user["name"]; ?>
          </a>
          <div class="dropdown-menu">
            <a href="../index.php" class="dropdown-item">Back To Home</a>
            <div class="dropdown-divider"></div>
            <a href="../logout.php" class="dropdown-item">logout</a>
          </div>
        </li>
      </ul>

      <!-- mobile app -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a href="" class="nav-link"> Hi, <?= $user["name"]; ?></a>
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
      <h2 class="dashboard-title">Dashboard</h2>
      <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
            <?php 
              $customers = rows("SELECT * FROM users");
            ?>
              <div class="dashboard-card-title">Customer</div>
              <div class="dashboard-card-subtitle"><?= $customers; ?></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
            <?php 
              $transactions = query("SELECT * FROM transactions");
              $total_price = 0;
              foreach ($transactions as $t ) {
                $total_price += $t["total_price"];
              }
              
              $total_price_product = 0;
              $products = query("SELECT * FROM products");
              foreach ($products as $p ) {
                $total_price_product += $p["price"];
              }

              $revenue = $total_price - $total_price_product;
              if ($revenue < 0) {
                $revenue = 0;
              }
            ?>
              <div class="dashboard-card-title">Revenue</div>
              <div class="dashboard-card-subtitle">Rp. <?= number_format($revenue); ?></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
            <?php 
              $transactionCount = rows("SELECT * FROM transactions");
            ?>
              <div class="dashboard-card-title">Transaction</div>
              <div class="dashboard-card-subtitle"><?= $transactionCount; ?></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-3">
        <div class="col-12 mt-2">
          <h5 class="mb-3">Recent Transactions</h5>
          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="../assets/images/1.jpg"
                    class="w-100"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Shirup Marzan</div>
                <div class="col-md-3">Angga Risky</div>
                <div class="col-md-3">14, Januari 2020</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/icon-row.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="../assets/images/2.jpg"
                    class="w-100"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Lebrone X</div>
                <div class="col-md-3">Masayashi</div>
                <div class="col-md-3">11 Januari, 2020</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/icon-row.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="../assets/images/3.jpg"
                    class="w-100"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Soffa Lembutte</div>
                <div class="col-md-3">Shayna</div>
                <div class="col-md-3">10 Januari, 2020</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/icon-row.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</div>