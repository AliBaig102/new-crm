<?php
require_once 'core/index.php';
if (isset($_SESSION['auth'])) {
    redirect('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Log In | <?= SITE_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description"/>
    <meta content="Techzaa" name="author"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App CSS -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons CSS -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
</head>

<body class="authentication-bg position-relative">
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-block p-2">
                            <img src="assets/images/auth-img.jpg" alt="" class="img-fluid rounded h-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <div class="auth-brand p-4">
                                    <a href="index.html" class="logo-light">
                                        <img src="assets/images/logo.png" alt="logo" height="22">
                                    </a>
                                    <a href="index.html" class="logo-dark">
                                        <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
                                    </a>
                                </div>
                                <div class="p-4">
                                    <?php displayErrorMessage();
                                    displaySuccessMessage(); ?>
                                </div>
                                <div class="p-4 my-auto">
                                    <h4 class="fs-20">Sign In</h4>
                                    <p class="text-muted mb-3">Enter your email address and password to access
                                        an account.
                                    </p>

                                    <!-- form -->
                                    <form action="actions/login.php" method="post" class="needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label for="email_address" class="form-label">Email address</label>
                                            <input class="form-control" name="email" type="email" id="email_address"
                                                   required=""
                                                   placeholder="Enter your email">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                please enter an email address.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <!--                                            <a href="auth-forgotpw.html" class="text-muted float-end"><small>Forgot-->
                                            <!--                                                    your-->
                                            <!--                                                    password?</small></a>-->
                                            <label for="password" class="form-label">Password</label>
                                            <input class="form-control" name="password" type="password" required=""
                                                   id="password"
                                                   placeholder="Enter your password">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                please enter a password.
                                            </div>
                                        </div>
                                        <div class="mb-0 text-start">
                                            <button class="btn btn-soft-primary w-100" type="submit"><i
                                                        class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log
                                                        In</span></button>
                                        </div>

                                    </form>
                                    <!-- end form-->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>