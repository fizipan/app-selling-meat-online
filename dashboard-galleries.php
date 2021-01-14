<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dashboard Galleries | Toko Supplier Daging Ayam Segar</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="assets/style/main.css" rel="stylesheet" />
</head>

<body>

  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="assets/images/logo.jpg" alt="" class="my-4 w-50">
        </div>
        <div class="list-group list-group-flush">
          <a
            href="/dashboard.html"
            class="list-group-item list-group-item-action"
          >
            Dashboard
          </a>
          <a
            href="/dashboard-products.html"
            class="list-group-item list-group-item-action "
          >
            Products
          </a>
          <a
            href="/dashboard-galleries.html"
            class="list-group-item list-group-item-action active"
          >
            Galleries
          </a>
          <a
            href="/dashboard-categories.html"
            class="list-group-item list-group-item-action"
          >
            Categories
          </a>
          <a
            href="/dashboard-transactions.html"
            class="list-group-item list-group-item-action"
          >
            Transactions
          </a>
          <a
            href="/dashboard-users.html"
            class="list-group-item list-group-item-action"
          >
            Users
          </a>
          <a
            href="/index.html"
            class="list-group-item list-group-item-action"
          >
            Sign Out
          </a>
        </div>
      </div>

      <!-- page content -->
      <div id="page-content-wrapper">
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
                    <img src="assets/images/user_pc.png" alt="profile" class="rounded-circle mr-2 profile-picture">
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
                    <img src="assets/images/shopping-cart-filled.svg" alt="cart-empty">
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
              <h2 class="dashboard-title">My Galleries</h2>
              <p class="dashboard-subtitle">add Product Galleries</p>
              <a href="/dashboard-galleries-create.html" class="btn btn-success">
                Add New Galleries
              </a>
            </div>
            <div class="dashboard-content">
              <div class="row mt-4">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.slim.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $('#menu-toggle').click(function (e) {
      e.preventDefault();
      $('#wrapper').toggleClass('toggled');
    })
  </script>
</body>

</html>