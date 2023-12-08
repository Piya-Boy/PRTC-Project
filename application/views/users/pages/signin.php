<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div class="img-logo" style="background-image: url(./assets/img/logo.jpg);"></div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>

                        </div>
                        <form action="users_controllers/login" method="post" class="signin-form">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" id="username" name="username" required>
                                <label class="form-control-placeholder" for="username">Username</label>
                            </div>
                            <div class="form-group mt-4">
                                <input id="password-field" type="password" class="form-control" id="passwor1d" name="password" required>
                                <label class="form-control-placeholder" for="password">Password</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group d-grid">
                                <button type="submit" class="btn btn-primary rounded  px-3">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>