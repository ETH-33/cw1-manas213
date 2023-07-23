<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header d-flex align-items-center">
                    <i class="bi bi-person-circle fs-4 me-2"></i> <h1 class="modal-title fs-5">User Login</h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>

            <div>
                <span>Don't have an acccount? <a href="#registerModal" data-bs-toggle="modal" data-bs-target="#registerModal">Create one</a>.</span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="register.php" method="POST">
                <div class="modal-header d-flex align-items-center">
                <i class="bi bi-person-lines-fill fs-4 me-2"></i> <h1 class="modal-title fs-5">User Registration</h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge text-bg-light mb-3 text-wrap">
                    Note: Your details must match your ID that will be required during check-in
                </span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" name="name">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none" name="email">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none" name="phn">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">ID</label>
                            <input type="file" class="form-control shadow-none" name="id">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control shadow-none" rows="1" name="address"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control shadow-none" name="country">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control shadow-none" name="dob">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" name="passwd">
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none" name="cpasswd">
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-dark shadow-none" name="register">Register</button>
                    </div>
                </div>
                    <div class="mb-3">
                </div>
            </form>
            <div>
                <span>Have an acccount? <a href="#registerModal" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a>.</span>
            </div>
        </div>
    </div>
</div>