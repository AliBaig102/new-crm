<?php
require_once 'core/index.php';
//authRedirect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Dashboard | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description"/>
    <meta content="Techzaa" name="author"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<!-- Begin page -->
<div class="wrapper">
    <?php
    require_once 'includes/header.php';
    require_once 'includes/sidebar.php';
    ?>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Velonic</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">AlL Bookers</li>
                                </ol>
                            </div>
                            <h4 class="page-title">AlL Bookers!</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="row">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>document.write(new Date().getFullYear())</script>
                        © Velonic - Theme by <b>Techzaa</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Daterangepicker js -->
<script src="assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Apex Charts js -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map js -->
<script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard App js -->
<script src="assets/js/pages/dashboard.js"></script>


<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>