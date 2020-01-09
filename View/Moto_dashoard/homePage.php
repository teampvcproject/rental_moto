<?php
include "View/Dashboard/dashboard.php";
?>
<div class="container mt-5">

  <div class="row mt-5">
    <div class="col-1"></div>
    <div class="col-10">
      <a href="index.php?action=add_form" class="btn btn-primary">Add New Moto</a>
  <br>
  <br>
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
          $id=1;
          foreach ($data['dashborad'] as $result) {

            ?>
            <tbody>
              <tr id="tr">
                <td>
                  <?php echo $id ?>
                  <a href="index.php?action=delete&id=<?php echo $result['motoId'] ?>"  onclick=" return confirm('Are you sure want to delete?')"><i class="fas fa-trash float-right text-danger"></i></a>
                  <a id="test" href="index.php?action=edit&id=<?php echo $result['motoId'] ?>"><i class="fas fa-edit float-right text-success"></i></a>
                </td>
                <td><?php echo $result['moto_name'] ?></td>
                <td><?php echo $result['number_plate'] ?></td>
                <td><?php echo $result['year_of_product'] ?></td>
                <td class="center">
                  <a id="rantal" class="btn btn-danger btn-sm" href="index.php?action=register&id=<?php echo $result['motoId']?>">Rental</a>
                </td>
              </tr>
            </tbody>
        <?php
        $id++;
          }
        }
        ?>
      </table>

    </div>
    <div class="col-1"></div>
  </div>
  
</div>

