<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title> <?= $title ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <base href="<?= base_url() ?>">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/admin/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

        <?= $leftMenu ?>
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            <?= $header ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

            <?= $content ?>

             
            </div>
            <!-- end main content-->
            <?= $footer ?>


        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/admin/css/bootstrap-dark.min.css" data-appStyle="assets/admin/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/admin/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/admin/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/admin/libs/jquery/jquery.min.js"></script>
        <script src="assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/admin/libs/node-waves/waves.min.js"></script>

        
        <!-- apexcharts -->
        <script src="assets/admin/libs/apexcharts/apexcharts.min.js"></script>

        <!-- jquery.vectormap map -->
        <script src="assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Required datatable js -->
        <script src="assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="assets/admin/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/admin/js/app.js"></script>
    </body>

</html>