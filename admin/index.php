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
              class="list-group-item list-group-item-action<?= $page == 'galleries' ? ' active' : ''; ?> <?= $page == 'galleries-create' ? ' active' : ''; ?>"
            >
              Galleries
            </a>
            <a
              href="?page=categories"
              class="list-group-item list-group-item-action<?= $page == 'categories' ? ' active' : ''; ?>"
            >
              Categories
            </a>
            <a
              href="?page=transactions"
              class="list-group-item list-group-item-action<?= $page == 'transactions' ? ' active' : ''; ?>"
            >
              Transactions
            </a>
            <a
              href="?page=users"
              class="list-group-item list-group-item-action<?= $page == 'users' ? ' active' : ''; ?>"
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
            } elseif ($page == 'categories') {
              include 'dasboard-categories.php';
            } elseif ($page == 'transactions') {
              include 'transactions.php';
            } elseif ($page == 'users') {
              include 'dashboard-users.php';
            } elseif ($page == 'logout') {
              include 'logout.php';
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin ingin menghapus <span class="text-danger font-weight-bold"><?= $product["product_name"]; ?></span> ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="?page=products-delete&id=<?= $product["id"]; ?>" class="btn btn-danger">Ya, Hapus</a>
          </div>
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
