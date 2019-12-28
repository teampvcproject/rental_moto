<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header" id="header_login">
                    <img src="View/img/user.png" id="user" class="img-fluid mx-auto d-block" alt="">
                </div>
                <div class="card-body"  id="body_login">
                    <form action="index.php?action=go_homePage" method="POST" class="was-validated">
                        <div class="input-group mt-3 rounded-pill">
                            <div class="input-group-prepend">
                                <span class="material-icons input-group-text">person</span>
                            </div>
                            <input type="text" name="user" class="form-control" placeholder="Username" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Please fill infomation</div>
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="material-icons input-group-text">https</span>
                            </div>
                            <input type="password"  name="pass" class="form-control" placeholder="Password" required>
                            <div class="valid-feedback">Valid</div>
                            <div class="invalid-feedback">Please fill infomation</div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block mt-3" value="LOGIN">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
