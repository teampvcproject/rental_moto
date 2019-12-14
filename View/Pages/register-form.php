<?php
    include "View/Dashboard/dashboard.php";
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php?action=form_data" method="post" >
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="moto"> Moto Name &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-4">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons"> motorcycle</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>

                        <div class="input-group mb-3">
                            <label for="moto"> Year of product &nbsp; &nbsp;</label>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> Number-plate &nbsp;</label>
                            <div class="input-group-append ml-3">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">event_note</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> Name of person </label>
                            <div class="input-group-append ml-2">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">person</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> Phone &nbsp;  &nbsp; &nbsp; </label>
                            <div class="input-group-append ml-5">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">phone</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> ID Card  &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-5">
                                <span class="input-group-text" id="basic-addon2"> <i class="material-icons">picture_in_picture</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> Start Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <div class="input-group-append ml-1">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="moto"> End Date &nbsp; &nbsp; &nbsp; &nbsp; </label>
                            <div class="input-group-append ml-3">
                                <span class="input-group-text" id="basic-addon2"><i class="material-icons">calendar_today</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-danger"  type="reset">Cancel  </button>
                        <button class="btn btn-primary float-right" name="register" type="reset">Register  </button>
                         </div>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>