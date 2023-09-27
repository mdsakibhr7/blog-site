<?php include 'header.php' ?>


<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registration</p>

                                <form action="" method="POST">
                                    <div class="mb-4">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" id="firstName" name="firstName" class="form-control">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="mobile">Mobile</label>
                                        <input type="text" id="mobile" name="mobile" class="form-control">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="role">Role</label>
                                        <select class="form-select" id="role" name="role" aria-label="Select Role">
                                            <option selected disabled>Select Role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Customer</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>

                                    <div class="text-center mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                     class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php'; ?>
