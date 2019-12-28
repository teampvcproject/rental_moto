 <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <img src="View/img/logo.png" id="logo" alt="">
      <div class="list-group list-group-flush">
        <a href="index.php?action=homePage" class="list-group-item text-light list-group-item-action" id="dashboard">Dashboard</a>
        <a href="rental_moto.php?action=moto_rental" class="list-group-item text-light list-group-item-action" id="rental">Rental Moto</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >

      <nav class="navbar navbar-expand-lg navbar-light border-bottom" id="header-menu">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php?action=login">Logout <span class="sr-only">(current)</span></a>
            </li>
            
           
          </ul>
        </div>
      </nav>

  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
