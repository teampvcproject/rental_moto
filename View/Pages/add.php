<?php
include "View/Dashboard/dashboard.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3 col-md-3 "></div>
        <div class="col-sm-6 col-md-6 ">
            <form action="index.php?action=add_moto" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Add New Moto</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Moto Name &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-4">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons"> motorcycle</i></span>
                            </div>
                            <input type="text" name="moto" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>

                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Year of product &nbsp; &nbsp;</label>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="text" name="calendar" id="datepicker" class="form-control calendar" aria-label="Recipient's calendar_today" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto" class="text-dark"> Number-plate &nbsp;</label>
                            <div class="input-group-append ml-3">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">event_note</i></span>
                            </div>
                            <input type="text" name = "number_plate" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <a href="index.php?action=homePage" class="btn btn-danger">Cancel</a>
                        <input class="btn btn-primary float-right" name="add" type="submit" value="Add New">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-3 col-md-3"></div>
    </div>
</div>
