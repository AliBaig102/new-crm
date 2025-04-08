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

    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
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
                            <?php
                                displayErrorMessage();
                                displaySuccessMessage();
                            ?>
                            <div class="card-body">
                                <h4 class="header-title">Booker Details</h4>
                                <table id="datatable-buttons"
                                       class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Area</th>
                                        <th width="50">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    global $auth;
                                    $data = $auth->getAllBookers();
                                    if ($data['status'] == "success"):
                                        foreach ($data['data'] as $booker):
                                            ?>
                                            <tr>
                                                <td><?= $booker['name'] ?></td>
                                                <td><?= $booker['email'] ?></td>
                                                <td><?= $booker['phone'] ?></td>
                                                <td><?= $booker['area'] ?></td>
                                                <td class="text-center">
                                                    <a href="actions/booker.php?action=delete&id=<?= $booker['id'] ?>"
                                                       class="text-danger deleteAdmin"
                                                       data-bs-toggle="tooltip" data-bs-placement="top"
                                                       data-bs-custom-class="danger-tooltip" data-bs-title="Delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        endforeach;
                                    else:
                                        ?>
                                        <tr>
                                            <td colspan="5" class="text-body text-center"><?= $data['message'] ?></td>
                                        </tr>
                                    <?php
                                    endif;
                                    ?>
                                    </tbody>
                                </table>
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
<!-- Datatables js -->
<script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>
<script>
    $(document).ready(function () {
        $('#datatable-buttons').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    text: '<i class="ri-user-add-line"></i> Add New Booker',
                    className: 'mx-1 btn btn-dark',
                    action: function () {
                        location.href = "add-booker.php";
                    }
                },
                {
                    extend: 'csv',
                    text: '<i class="ri-file-excel-2-line"></i> Export to CSV',
                    className: 'mx-1 btn btn-success',
                    title: 'All_Users',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="ri-printer-line"></i> Print Preview',
                    className: 'mx-1 btn btn-warning',
                    title: 'All Users',
                    exportOptions: {
                        columns: ':not(:last-child)'
                    }
                },
            ],
            language: {
                paginate: {
                    previous: "<i class='ri-arrow-left-s-line'>",
                    next: "<i class='ri-arrow-right-s-line'>"
                }
            },
            drawCallback: function () {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
    })
</script>
</body>
</html>