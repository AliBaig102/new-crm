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
                                    <li class="breadcrumb-item active">Welcome!</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Welcome!</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-pink">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-eye-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Daily Visits</h6>
                                <h2 class="my-2">8,652</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">2.97%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-purple">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-wallet-2-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Revenue</h6>
                                <h2 class="my-2">$9,254.62</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">18.25%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-info">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-shopping-basket-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Orders</h6>
                                <h2 class="my-2">753</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-25 me-1">-5.75%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-primary">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-group-2-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Users</h6>
                                <h2 class="my-2">63,154</h2>
                                <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                                    <a data-bs-toggle="collapse" href="#weeklysales-collapse" role="button"
                                       aria-expanded="false" aria-controls="weeklysales-collapse"><i
                                                class="ri-subtract-line"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                                </div>
                                <h5 class="header-title mb-0">Weekly Sales Report</h5>

                                <div id="weeklysales-collapse" class="collapse pt-3 show">
                                    <div dir="ltr">
                                        <div id="revenue-chart" class="apex-charts"
                                             data-colors="#3bc0c3,#1a2942,#d1d7d973"></div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col">
                                            <p class="text-muted mt-3">Current Week</p>
                                            <h3 class=" mb-0">
                                                <span>$506.54</span>
                                            </h3>
                                        </div>
                                        <div class="col">
                                            <p class="text-muted mt-3">Previous Week</p>
                                            <h3 class=" mb-0">
                                                <span>$305.25 </span>
                                            </h3>
                                        </div>
                                        <div class="col">
                                            <p class="text-muted mt-3">Conversation</p>
                                            <h3 class=" mb-0">
                                                <span>3.27%</span>
                                            </h3>
                                        </div>
                                        <div class="col">
                                            <p class="text-muted mt-3">Customers</p>
                                            <h3 class=" mb-0">
                                                <span>3k</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-widgets">
                                    <a href="javascript:;" data-bs-toggle="reload"><i class="ri-refresh-line"></i></a>
                                    <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                                       aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                                class="ri-subtract-line"></i></a>
                                    <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                                </div>
                                <h5 class="header-title mb-0">Yearly Sales Report</h5>

                                <div id="yearly-sales-collapse" class="collapse pt-3 show">
                                    <div dir="ltr">
                                        <div id="yearly-sales-chart" class="apex-charts"
                                             data-colors="#3bc0c3,#1a2942,#d1d7d973"></div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <p class="text-muted mt-3 mb-2">Quarter 1</p>
                                            <h4 class="mb-0">$56.2k</h4>
                                        </div>
                                        <div class="col">
                                            <p class="text-muted mt-3 mb-2">Quarter 2</p>
                                            <h4 class="mb-0">$42.5k</h4>
                                        </div>
                                        <div class="col">
                                            <p class="text-muted mt-3 mb-2">All Time</p>
                                            <h4 class="mb-0">$102.03k</h4>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h4 class="fs-22 fw-semibold">69.25%</h4>
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> US Dollar
                                            Share</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="us-share-chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <!-- Chat-->
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="card-widgets">
                                        <a href="javascript:;" data-bs-toggle="reload"><i
                                                    class="ri-refresh-line"></i></a>
                                        <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                                           aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                                    class="ri-subtract-line"></i></a>
                                        <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0">Chat</h5>
                                </div>

                                <div id="yearly-sales-collapse" class="collapse show">
                                    <div class="chat-conversation mt-2">
                                        <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                            <ul class="conversation-list">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                        <i>10:00</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Geneva</i>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Thomson</i>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                        <i>10:01</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Geneva</i>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="male">
                                                        <i>10:02</i>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>Thomson</i>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body pt-0">
                                            <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                <div class="row align-items-start">
                                                    <div class="col">
                                                        <input type="text" class="form-control chat-input"
                                                               placeholder="Enter your text" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-grid">
                                                        <button type="submit"
                                                                class="btn btn-danger chat-send waves-effect waves-light">
                                                            Send
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div> <!-- end .chat-conversation-->
                                </div>
                            </div>

                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-8">
                        <!-- Todo-->
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="card-widgets">
                                        <a href="javascript:;" data-bs-toggle="reload"><i
                                                    class="ri-refresh-line"></i></a>
                                        <a data-bs-toggle="collapse" href="#yearly-sales-collapse" role="button"
                                           aria-expanded="false" aria-controls="yearly-sales-collapse"><i
                                                    class="ri-subtract-line"></i></a>
                                        <a href="#" data-bs-toggle="remove"><i class="ri-close-line"></i></a>
                                    </div>
                                    <h5 class="header-title mb-0">Projects</h5>
                                </div>

                                <div id="yearly-sales-collapse" class="collapse show">

                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-hover mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Velonic Admin v1</td>
                                                <td>01/01/2015</td>
                                                <td>26/04/2015</td>
                                                <td><span class="badge bg-info-subtle text-info">Released</span></td>
                                                <td>Techzaa Studio</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Velonic Frontend v1</td>
                                                <td>01/01/2015</td>
                                                <td>26/04/2015</td>
                                                <td><span class="badge bg-info-subtle text-info">Released</span></td>
                                                <td>Techzaa Studio</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Velonic Admin v1.1</td>
                                                <td>01/05/2015</td>
                                                <td>10/05/2015</td>
                                                <td><span class="badge bg-pink-subtle text-pink">Pending</span></td>
                                                <td>Techzaa Studio</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Velonic Frontend v1.1</td>
                                                <td>01/01/2015</td>
                                                <td>31/05/2015</td>
                                                <td>
                                                    <span class="badge bg-purple-subtle text-purple">Work in Progress</span>
                                                </td>
                                                <td>Techzaa Studio</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Velonic Admin v1.3</td>
                                                <td>01/01/2015</td>
                                                <td>31/05/2015</td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning">Coming soon</span>
                                                </td>
                                                <td>Techzaa Studio</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Velonic Admin v1.3</td>
                                                <td>01/01/2015</td>
                                                <td>31/05/2015</td>
                                                <td>
                                                    <span class="badge bg-primary-subtle text-primary">Coming soon</span>
                                                </td>
                                                <td>Techzaa Studio</td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>Velonic Admin v1.3</td>
                                                <td>01/01/2015</td>
                                                <td>31/05/2015</td>
                                                <td><span class="badge bg-danger-subtle text-danger">Cool</span></td>
                                                <td>Techzaa Studio</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

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