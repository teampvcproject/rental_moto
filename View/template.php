<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Moto Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="View/css/bootstrap.min.css">
    <link rel="stylesheet" href="View/css/style.css">
    <!-- CSS Files -->
    <link href="View/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>

<body>
    <?php
    include_once "View/" . $data['page'];
    ?>
    <script src="View/assets/js/core/jquery.min.js"></script>
    <script src="View/assets/js/core/popper.min.js"></script>
    <script src="View/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="View/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example Pagess etc -->
    <script src="View/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="View/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    
</body>

</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>