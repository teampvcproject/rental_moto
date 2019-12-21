<?php
include "View/Dashboard/dashboard.php";
?>
    <div class="row mt-5 table">
        <div class="col-12 table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Moto name</th>
                        <th>Number_plate</th>
                        <th>Year of product</th>
                        <th>Person's name</th>
                        <th>Phone</th>
                        <th>ID Card</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($data['m_rental'])) {
                    foreach ($data['m_rental'] as $value) {
                        
               
                ?>
                    <tr>
                        <td><?php echo $value['userId']; ?></td>
                        <td><?php echo $value['moto_name']; ?></td>
                        <td><?php echo $value['year_of_product']; ?></td>
                        <td><?php echo $value['number_plate']; ?></td>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['phonenumber']; ?></td>
                        <td><?php echo $value['id_card']; ?></td>
                        <td><?php echo $value['start_date']; ?></td>
                        <td><?php echo $value['end_date']; ?></td>
                        <td><?php echo $value['username']; ?></td>
                    </tr>
                <?php
                         }
                        }
                ?>
                </tbody>
                <?php

                ?>
            </table>
        </div>
    </div>
