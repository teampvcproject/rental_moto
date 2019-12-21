<?php
    include "View/Dashboard/dashboard.php";
    include "connection.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php?action=register_form" method="POST" >
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register Form</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($data['data'])) {
                                foreach ($data['data'] as $value) {
                        ?>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Moto Name &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-4">
                                <span class="input-group-text"  id="basic-addon2"> <i class="material-icons"> motorcycle</i></span>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $value['motoId']; ?>">
                            <input type="text" value="<?php echo $value['moto_name']; ?>" class="form-control" disabled aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>

                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Year of product &nbsp; &nbsp;</label>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="text" value="<?php echo $value['number_plate']; ?>" class="form-control" aria-label="Recipient's username" disabled aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Number-plate &nbsp;</label>
                            <div class="input-group-append ml-3">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">event_note</i></span>
                            </div>
                            <input type="text" value="<?php echo $value['year_of_product']; ?>" class="form-control" aria-label="Recipient's username" disabled aria-describedby="basic-addon2">
                        </div>
                        <?php
                             }
                            }
                        ?>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Name of person </label>
                            <div class="input-group-append ml-2">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">person</i></span>
                            </div>
                            <input type="text" name="p_name" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Phone &nbsp;  &nbsp; &nbsp; </label>
                            <div class="input-group-append ml-5">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">phone</i></span>
                            </div>
                            <input type="text" name="phone" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> ID Card  &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-5">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">picture_in_picture</i></span>
                            </div>
                            <input type="text" name="id_card" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Start Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-1">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="date" name="start" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> End Date &nbsp; &nbsp; &nbsp; &nbsp; </label>
                            <div class="input-group-append ml-3">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="date" name="end" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-danger">Cancel  </button>
                        <input class="btn btn-primary float-right" type="submit" value="register">
                         </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>