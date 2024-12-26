<main>
    <div class="main-content">
        <div class="container-fluid">
            <div class="auth-wrapper pt-5 ">
                <div class="authInfo d-flex flex-column align-items-center justify-content-center gap-3 mb-4 ">
                    <div class="favcon-icon">
                        <img src="assets/images/brand/logo.svg" alt="" class="w-auto h-auto">
                    </div>
                    <h5>Welcome Back</h5>
                    <p>Enter the information while you are registering</p>
                </div>
                <form action="userdashboard.html">
                    <div class="form-group position-relative mb-3">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phn_num" placeholder="Phone Number">
                        <img src="assets/images/icon/form_cell.svg" alt="" class="w-auto h-auto form-icon">
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                        <img src="assets/images/icon/form_lock.svg" alt="" class="w-auto h-auto form-icon">
                    </div>
                    <div class="form-group  mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                                Remember Me
                            </label>
                        </div>

                    </div>
                    <button class="btn btn-primary btn-md w-100 mt-4">Login</button>
                </form>
                <div class="d-flex mt-4 flex-column align-items-center justify-content-center gap-2">
                    <a href="forgetpassword.html" class="font-16 fw-500 text-primary">Forgot password?</a>
                    <p class="font-16 fw-500 text-black">New Customer? <a href="register.html"
                                                                          class=" text-primary">Register
                        </a>Here</p>
                </div>
            </div>
        </div>
    </div>
</main>
