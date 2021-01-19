<?php 
require_once '../config/config.php';
if (!isset($_SESSION["login"]) && !isset($_SESSION["user"])) {
  header("Location: ../index.php");
} else {
  $id = $_SESSION["user"];
  $result = query("SELECT * FROM users WHERE id_user = $id")[0];
  if ($result['roles'] !== 'ADMIN') {
    header("Location: ../index.php");
  }
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

    <title>Dashboard | Toko Supplier Daging Ayam Segar</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="../assets/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/vendor/DataTables/datatables.min.css"/>
  </head>

  <body>
    <?php 
    if (isset($_GET["page"])) {
      $page = $_GET["page"];
    }
    ?>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="../assets/images/logo.jpg" alt="" class="my-4 w-50" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="?page=dashboard"
              class="list-group-item list-group-item-action<?= $page == 'dashboard' ? ' active' : ''; ?> <?= $page == '' ? ' active' : ''; ?>"
            >
              Dashboard
            </a>
            <a
              href="?page=products"
              class="list-group-item list-group-item-action<?= $page == 'products' ? ' active' : ''; ?> <?= $page == 'products-create' ? ' active' : ''; ?> <?= $page == 'products-details' ? ' active' : ''; ?>"
            >
              Products
            </a>
            <a
              href="?page=galleries"
              class="list-group-item list-group-item-action<?= $page == 'galleries' ? ' active' : ''; ?> <?= $page == 'galleries-create' ? ' active' : ''; ?> <?= $page == 'galleries-details' ? ' active' : ''; ?>"
            >
              Galleries
            </a>
            <a
              href="?page=categories"
              class="list-group-item list-group-item-action<?= $page == 'categories' ? ' active' : ''; ?> <?= $page == 'categories-create' ? ' active' : ''; ?> <?= $page == 'categories-details' ? ' active' : ''; ?> <?= $page == 'categories-delete' ? ' active' : ''; ?>"
            >
              Categories
            </a>
            <a
              href="?page=transactions"
              class="list-group-item list-group-item-action<?= $page == 'transactions' ? ' active' : ''; ?> <?= $page == 'transactions-transfer' ? ' active' : ''; ?> <?= $page == 'transactions-details' ? ' active' : ''; ?> <?= $page == 'transactions-delete' ? ' active' : ''; ?>"
            >
              Transactions
            </a>
            <a
              href="?page=users"
              class="list-group-item list-group-item-action<?= $page == 'users' ? ' active' : ''; ?> <?= $page == 'users-create' ? ' active' : ''; ?> <?= $page == 'users-details' ? ' active' : ''; ?>"
            >
              Users
            </a>
            <a
              href="?page=logout"
              class="list-group-item list-group-item-action<?= $page == 'logout' ? ' active' : ''; ?>"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- page content -->
        <div id="page-content-wrapper">
          <?php 

          if (isset($page)) {
            if ($page == 'dashboard') {
              include 'dashboard.php';
            } elseif ($page == 'products') {
              include 'dashboard-products.php';
            } elseif ($page == 'products-create') {
              include 'dashboard-product-create.php';
            } elseif ($page == 'products-details') {
              include 'dashboard-products-details.php';
            } elseif ($page == 'products-delete') {
              include 'dashboard-product-delete.php';
            } elseif ($page == 'galleries') {
              include 'dashboard-galleries.php';
            } elseif ($page == 'galleries-create') {
              include 'dashboard-galleries-create.php';
            } elseif ($page == 'galleries-details') {
              include 'dashboard-galleries-details.php';
            } elseif ($page == 'galleries-delete') {
              include 'dashboard-galleries-delete.php';
            } elseif ($page == 'categories') {
              include 'dashboard-categories.php';
            } elseif ($page == 'categories-create') {
              include 'dashboard-categories-create.php';
            } elseif ($page == 'categories-details') {
              include 'dashboard-categories-details.php';
            } elseif ($page == 'categories-delete') {
              include 'dashboard-categories-delete.php';
            } elseif ($page == 'transactions') {
              include 'transaction/dashboard-transactions.php';
            } elseif ($page == 'transactions-details') {
              include 'transaction/dashboard-transactions-details.php';
            } elseif ($page == 'transactions-delete') {
              include 'transaction/dashboard-transactions-delete.php';
            } elseif ($page == 'transactions-transfer') {
              include 'transaction/dashboard-transfer.php';
            } elseif ($page == 'users') {
              include 'users/dashboard-users.php';
            } elseif ($page == 'users-create') {
              include 'users/dashboard-users-create.php';
            } elseif ($page == 'users-details') {
              include 'users/dashboard-users-details.php';
            } elseif ($page == 'users-delete') {
              include 'users/dashboard-users-delete.php';
            } elseif ($page == 'logout') {
              include '../logout.php';
            } else {
              echo "Halaman Tidak Ditemukan";
            }
          } else {
            include 'dashboard.php';
          }

          ?>
        </div>
      </div>
    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.slim.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace("editor");
    </script>
    <script type="text/javascript" src="../assets/vendor/DataTables/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#table').DataTable();
      } );
    </script>
  </body>
</html>
