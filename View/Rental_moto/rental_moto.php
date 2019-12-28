<?php
include "View/Dashboard/dashboard.php";
?>
 <div class="container mt-5">
         <h1 class="text-primary text-center">List of Rental Moto</h1>      
        <div class="row">
            <div class="col-12">
            <table id="example" class="table table-responsive table-bordered text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>UserId</th>
                        <th>MotoName</th>
                        <th>NumberPlate</th>
                        <th>YearOfProduct</th>
                        <th>Username</th>
                        <th>IDCard</th>
                        <th>Phone</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['t_info'])) {
                    $id=1;
                    foreach ($data['t_info'] as $result) {
                        ?>
                        <tbody>
                            <tr>
                            <td> <?php echo $id  ?> </td>
                                <td> <?php echo $result['moto_name'];  ?> </td>
                                <td> <?php echo $result['number_plate'];  ?> </td>
                                <td> <?php echo $result['year_of_product'];  ?> </td>
                                <td> <?php echo $result['username'];  ?> </td>
                                <td> <?php echo $result['id_card'];  ?> </td>
                                <td> <?php echo $result['phonenumber'];  ?> </td>
                                <td> <?php echo $result['start_date'];  ?> </td>
                                <td> <?php echo $result['end_date'];  ?> </td>
                                <td>
                                    <a href="rental_moto.php?action=edit_moto_rental&id=<?php  echo $result['userId']; ?>"> <i class="fas fa-edit"></i></a>
                                    <a href="rental_moto.php?action=deleteUser&id=<?php  echo $result['userId']; ?>" onclick="return confirm('Are you sure want to delete this customer?')"> <i class="fas fa-trash text-danger"></i></a>
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
        </div>
    </div>
   