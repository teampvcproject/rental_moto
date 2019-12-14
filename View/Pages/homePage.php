

<?php
  include "View/Dashboard/dashboard.php";
?>
    <!-- Lysa Thorn -->
    <div class="container mt-5">
      
      <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col-10">
        <a href="index.php?action=add_form" class="btn btn-primary">Add New Moto</a>
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