<div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h1 class="text-info">List of Rental Moto</h1>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
                <thead class="text-primary">
                    <tr>
                        <th>Moto ID</th>
                        <th>Moto name</th>
                        <th>Number_plate</th>
                        <th>Year of product</th>
                        <th>UserId</th>
                        <th>Person's name</th>
                        <th>ID Card</th>
                        <th>Phone</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['t_info'])) {
                    foreach ($data['t_info'] as $result) {
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $result['motoId'];  ?> </td>
                                <td> <?php echo $result['moto_name'];  ?> </td>
                                <td> <?php echo $result['number_plate'];  ?> </td>
                                <td> <?php echo $result['year_of_product'];  ?> </td>
                                <td> <?php echo $result['userId'];  ?> </td>
                                <td> <?php echo $result['username'];  ?> </td>
                                <td> <?php echo $result['id_card'];  ?> </td>
                                <td> <?php echo $result['phonenumber'];  ?> </td>
                                <td> <?php echo $result['start_date'];  ?> </td>
                                <td> <?php echo $result['end_date'];  ?> </td>
                                <td>
                                    <a href=""> <i class="fas fa-edit"></i></a>
                                    <a href=""> <i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>