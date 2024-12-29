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
                <form action="{{ route('user.register') }}" method="POST">
                    @csrf

                    <div class="form-group position-relative mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                        <img src="assets/images/icon/form_user.svg" alt="" class="w-auto h-auto form-icon">
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        <img src="assets/images/icon/form_cell.svg" alt="" class="w-auto h-auto form-icon">
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <img src="assets/images/icon/form_lock.svg" alt="" class="w-auto h-auto form-icon">
                    </div>
                    <div class="form-group position-relative mb-3">
                        <label for="" class="form-label">Address</label>
                        <textarea name="address" id="" class="form-control" cols="1" rows="2" placeholder="Address"></textarea>
                        <img src="assets/images/icon/form_address.svg" alt="" class="w-auto h-auto form-icon address">
                    </div>
                    <button class="btn btn-primary btn-md w-100 mt-4">Register</button>
                </form>
                <div class="d-flex mt-4 flex-column align-items-center justify-content-center gap-2">
                    <a href="#" class="font-16 fw-500 text-primary">Forgot Password?</a>
                    <p class="font-16 fw-500 text-black">All ready register? <a href="{{ route('login.form') }}"
                                                                                class=" text-primary">Login
                        </a>Here</p>
                </div>
            </div>
        </div>
    </div>
</main>
