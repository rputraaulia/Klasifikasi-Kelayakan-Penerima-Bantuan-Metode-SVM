<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Pemberi Keputusan Metode moora">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="moora">

    <!-- Title Page-->
    <title>moora - <?= $title ?></title>

    <!-- Fontfaces CSS-->

    <link href="<?= base_url('assets/admin/') ?>css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/template/'); ?>assets/css/style.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Selamat Datang Admin</h3>
                            <form action="<?= base_url('login/getLogin') ?>" method="post">
                                <div class="form-group">
                                    <label>Username*</label>

                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">

                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/admin/') ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/admin/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/'); ?>sweetarlet/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/'); ?>sweetarlet/dist/myscript.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/template/'); ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/misc.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/settings.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url('assets/template/'); ?>assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

</body>

</html>
<!-- end document-->