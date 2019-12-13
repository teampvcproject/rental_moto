<div class="wrapper p-0">
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
      <a href="" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="">
            <i class="material-icons">motorcycle</i>
            <p>Rental Moto</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <!-- <a class="navbar-brand" href="#pablo">Dashboard</a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">

          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">person</i>
                <p class="d-lg-none d-md-block">
                  Account
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br>
    <!-- End Navbar -->

    <!-- Lysa Thorn -->
    <div class="container mt-5">
      
      <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col-10">
        <a href="View/Pages/register-form.php" class="btn btn-primary">Add New Moto</a>
          <?php
          if (isset($data['dashborad'])) {
            foreach ($data['dashborad'] as $result) {

              ?>
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Moto's name</th>
                    <th>Number-plate</th>
                    <th>Year of product</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $result['motoId'] ?></td>
                    <td><?php echo $result['moto_name'] ?></td>
                    <td><?php echo $result['number_plate'] ?></td>
                    <td><?php echo $result['year_of_product'] ?></td>
                  </tr>
                </tbody>
              </table>
          <?php
            }
          }
          ?>
        </div>
        <div class="col-1"></div>
      </div>
    </div>