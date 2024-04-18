<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Pemberi Keputusan Metode moora">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="SVM">

    <!-- Title Page-->
    <title>SVM - <?= $title ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/admin/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/admin/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
    
  
    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/admin/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->

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
    <link href="<?= base_url('assets/admin/') ?>css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
</head>

<body>

  
    <div class="container-scroller">



 
      <?php $this->load->view('template/header2'); ?>
     
      



        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->

            <nav class="navbar navbar-offcanvas p-0 fixed-top d-flex flex-row">
                <button class="navbar-toggler navbar-toggler-right d-lg-none " type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span> </button>
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" >   <h4 style="color:aliceblue">Klasifikasi Bansos Binjai Kota</h4></a>
                </div>
                
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                   
            

               
                  
                </div>
            </nav>



            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            <div class="main-panel">
                <div class="content-wrapper">


                 

                   




                    <?php $this->load->view($konten); ?>




                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©skrpsi 2023</span>
                    </div>
                </footer>
            </div>
        </div>

    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

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
    
    
  <!-- inject:js -->
    <script src="<?= base_url('assets/template/'); ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/misc.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/settings.js"></script>
    <script src="<?= base_url('assets/template/'); ?>assets/js/todolist.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap.min.js"></script>
    <!-- endinject -->
<script>

var map = L.map('map').setView([3.6084662581335714, 98.49043897684115], 14);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
var markers = [];
$.each($('.marker'), function () {
    var marker = [];
    var lat = $(this).attr('data-lat');
    var lng = $(this).attr('data-lng');
    marker = [lat, lng];
    markers.push( marker );
});  
for (var i = 0; i < markers.length; i++) {
        marker = new L.marker([markers[i][0], markers[i][1]]).bindPopup(markers[i][0]).addTo(map);
}
</script>
</body>

</html>
<!-- end document-->
