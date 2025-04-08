<?php
require_once 'core/index.php';
authRedirect();
onlyAdminAccess();
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
                                    <li class="breadcrumb-item active">Add Booker!</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Booker!</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <?php displaySuccessMessage();
                            displayErrorMessage(); ?>
                            <div class="card-body">
                                <h4 class="header-title">Booker Details</h4>
                                <form action="actions/booker.php?action=create" method="post" class="needs-validation"
                                      novalidate>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required
                                               placeholder="Enter full name">
                                        <div class="invalid-feedback">Please enter a valid name.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required
                                               placeholder="Enter email">
                                        <div class="invalid-feedback">Please enter a valid email.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required
                                               placeholder="Enter phone number">
                                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="area" class="form-label">Area</label>
                                        <input type="text" class="form-control" id="area" name="area" required
                                               placeholder="Enter area">
                                        <div class="invalid-feedback">Please enter an area.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               required placeholder="Enter password">
                                        <div class="invalid-feedback">Please enter a password.</div>
                                    </div>

                                    <div class="mb-0">
                                        <button type="submit" class="btn btn-primary w-100">Add Booker</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container -->

        </div>
        <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>
<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>
</html>