<?php 
require '../config/config.php';

if (isset($_POST["tambahUser"])) {
  if (tambahUser($_POST) > 0) {
    echo "<script>
            alert('User Berhasil Ditambahkan');
            document.location.href = '?page=users';
          </script>";
  } else {
    echo "<script>
            alert('User Gagal Ditambahkan');
            document.location.href = '?page=users';
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
      <h2 class="dashboard-title">Create User</h2>
      <p class="dashboard-subtitle">Create your own User</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <form action="" method="POST">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Nama User</label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="phone_number">No HP / WA</label>
                      <input
                        type="number"
                        name="phone_number"
                        id="phone_number"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea name="alamat" id="editor" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="roles">Roles</label>
                      <select name="roles" id="roles" class="form-control" required>
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      name="tambahUser"
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