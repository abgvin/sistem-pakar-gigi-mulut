<?php
$con = mysqli_connect('localhost', 'root', '', 'pakar_gigi_mulut') or die(mysqli_error());
session_start();
if ( empty($_SESSION['user']) || empty($_SESSION['level']) ) {
  echo "	<script>
						window.location='../login/index.html'
					</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistem Pakar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- <link rel="stylesheet" type="text/css" href="../libs/DataTables/datatables.min.css"/> -->
  <link rel="stylesheet" href="../libs/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          Sistem Pakar
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php
          if ( $_GET['a'] == 'dashboard' || $_GET['a'] == '' ) { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php
          if ( $_GET['a'] == 'gejala' || $_GET['a'] == 'add-gejala' || $_GET['a'] == 'edit-gejala') { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=gejala">
              <i class="nc-icon nc-tile-56"></i>
              <p>Data Gejala</p>
            </a>
          </li>
          <?php
          if ( $_GET['a'] == 'penyakit' || $_GET['a'] == 'add-penyakit' || $_GET['a'] == 'edit-penyakit' ) { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=penyakit">
              <i class="nc-icon nc-planet"></i>
              <p>Data Penyakit</p>
            </a>
          </li>
          <?php
          if ( $_GET['a'] == 'rules' || $_GET['a'] == 'add-rules' ) { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=rules">
              <i class="nc-icon nc-bulb-63"></i>
              <p>Rules</p>
            </a>
          </li>
          <?php
          if ( $_GET['a'] == 'history' ) { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=history">
              <i class="nc-icon nc-book-bookmark"></i>
              <p>History</p>
            </a>
          </li>
          <?php
          if ( $_GET['a'] == 'logout' ) { ?>
          <li class="active">
          <?php } else { ?>
          <li>
          <?php } ?>
            <a href="pakar.php?a=logout">
              <i class="nc-icon nc-user-run"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
           <?php
          if ( $_GET['a'] == 'dashboard' || $_GET['a'] == '' ) { ?>
            <a class="navbar-brand" href="">Dashboard</a>
            <?php } else if ( $_GET['a'] == 'gejala' ) { ?>
            <a class="navbar-brand" href="">Data Gejala</a>            
            <?php } else if ( $_GET['a'] == 'penyakit' ) { ?>
            <a class="navbar-brand" href="">Data Penyakit</a>            
            <?php } else if ( $_GET['a'] == 'rules' ) { ?>
            <a class="navbar-brand" href="">Rules base Sistem Pakar</a>            
            <?php } else if ( $_GET['a'] == 'logout' ) { ?>
            <a class="navbar-brand" href="">Logout</a>            
            <?php } else if ( $_GET['a'] == 'add-gejala' ) { ?>
            <a class="navbar-brand" href="">Tambah Data Gejala</a>            
            <?php } else if ( $_GET['a'] == 'edit-gejala' ) { ?>
            <a class="navbar-brand" href="">Edit Data Gejala</a>            
            <?php } else if ( $_GET['a'] == 'add-penyakit' ) { ?>
            <a class="navbar-brand" href="">Tambah Data Penyakit Gigi dan Mulut</a>            
            <?php } else if ( $_GET['a'] == 'edit-penyakit' ) { ?>
            <a class="navbar-brand" href="">Edit Data Penyakit Gigi dan Mulut</a>            
            <?php } else if ( $_GET['a'] == 'add-rules' ) { ?>
            <a class="navbar-brand" href="">Tambah Rules Sistem Pakar</a>            
            <?php } else if ( $_GET['a'] == 'history' ) { ?>
            <a class="navbar-brand" href="">Riwayat Konsultasi Users</a>            
          <?php } ?>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->
      <div class="content">
        <div class="row">
          <?php
          if ( $_GET['a'] == 'dashboard' || $_GET['a'] == '') {
            include('dashboard.php');
          } else if ( $_GET['a'] == 'gejala' ) {
            include('gejala.php');
          } else if ( $_GET['a'] == 'penyakit' ) {
            include('penyakit.php');
          } else if ( $_GET['a'] == 'rules' ) {
            include('rules.php');
          } else if ( $_GET['a'] == 'logout' ) {
            include('logout.php');
          } else if ( $_GET['a'] == 'add-gejala' ) {
            include('add-gejala.php');
          } else if ( $_GET['a'] == 'edit-gejala' ) {
            include('edit-gejala.php');
          } else if ( $_GET['a'] == 'del-gejala' ) {
            include('del-gejala.php');
          } else if ( $_GET['a'] == 'add-penyakit' ) {
            include('add-penyakit.php');
          } else if ( $_GET['a'] == 'edit-penyakit' ) {
            include('edit-penyakit.php');
          } else if ( $_GET['a'] == 'del-penyakit' ) {
            include('del-penyakit.php');
          } else if ( $_GET['a'] == 'add-rules' ) {
            include('add-rules.php');
          } else if ( $_GET['a'] == 'history' ) {
            include('history.php');
          } else if ( $_GET['a'] == 'del-rules' ) {
            include('del-rules.php');
          } else if ( $_GET['a'] == 'del-history' ) {
            include('del-history.php');
          }
          ?>



        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/jquery.rowspanizer.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script type="text/javascript" src="../libs/DataTables/datatables.min.js"></script>
  <script src="../libs/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="../libs/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready( function () {
        $('#table').DataTable();
        $('table').rowspanizer();
        
    } );
  </script>
</body>

</html>