<?php
include "View/Dashboard/dashboard.php";
?>
<!-- Lysa Thorn -->
<div class="container mt-5">

  <div class="row mt-5">
    <div class="col-1"></div>
    <div class="col-10">
      <a href="index.php?action=add_form" class="btn btn-primary">Add New Moto</a>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Moto's name</th>
            <th>Number-plate</th>
            <th>Year of product</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        if (isset($data['dashborad'])) {
          foreach ($data['dashborad'] as $result) {

            ?>
            <tbody>
              <tr>
                <td>
                  <?php echo $result['motoId'] ?>
                  <a href="index.php?action=delete" onclick="confirm('Are you sure want to delete?')"><i class="fas fa-trash float-right text-danger"></i></a>
                  <a href=""><i class="fas fa-edit float-right text-success"></i></a>
                </td>
                <td><?php echo $result['moto_name'] ?></td>
                <td><?php echo $result['number_plate'] ?></td>
                <td><?php echo $result['year_of_product'] ?></td>
                <td class="center">
                  <a class="btn btn-danger btn-sm" href="index.php?action=register&id=<?php echo $result['motoId'] ?>">Rental</a>
                </td>
              </tr>
            </tbody>
        <?php
          }
        }
        ?>
      </table>

    </div>
    <div class="col-1"></div>
  </div>
</div>