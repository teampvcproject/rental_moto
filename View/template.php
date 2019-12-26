<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Moto Management System</title>
    <!-- Bootstrap core CSS -->
    <link href="View/Dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this template -->
    <link href="View/Dashboard/css/simple-sidebar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="View/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/css/style.css">
    <!-- CSS Files -->
    <link href="View/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- celandar -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- google icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap core JavaScript -->
    <script src="View/Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="View/Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- scripe for Data table -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="View/js/homePage.js"></script>
</head>

<body>
    <?php
    include_once "View/". $data['page'];
    ?>
</body>

</html>
<script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
</script>