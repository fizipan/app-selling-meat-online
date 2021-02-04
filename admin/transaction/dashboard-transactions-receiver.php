<?php 
$id = $_SESSION["user"];
$user = query("SELECT * FROM users WHERE id_user = $id")[0];

$idTransaction = $_GET["id"];
$transaction_details = query("SELECT * FROM transactions_details INNER JOIN transactions ON transactions_details.transaction_id = transactions.id_transaction INNER JOIN products ON transactions_details.product_id = products.id_product WHERE transaction_id = $idTransaction");

if (isset($_POST["terkirim"])) {
  if (terkirim($_POST) > 0) {
    header("Location: ?page=transactions");
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
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
      <?php 
        $transactionMain = query("SELECT * FROM transactions INNER JOIN users ON transactions.user_id = users.id_user WHERE id_transaction = $idTransaction")[0];
      ?>
        <h2 class="dashboard-title"><?= $transactionMain["name"]; ?></h2>
        <p class="dashboard-subtitle">#<?= $transactionMain["code"]; ?></p>
      </div>
      <div class="dashboard-content store-cart">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body pb-0">
              <form action="" method="POST">
                  <div class="row" data-aos="fade-up" data-aos-delay="100">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="penerima">Nama Penerima</label>
                          <input type="hidden" name="id_transaction" value="<?= $transactionMain["id_transaction"]; ?>">
                          <input type="text" name="penerima" id="penerima" class="form-control">
                          <div class="text-right">
                            <button type="submit" name="terkirim" class="btn btn-success mt-4">Save Changes</button>
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
    </div>
  </div>
  
  



