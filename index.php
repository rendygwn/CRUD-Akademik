<?php
session_start();
//koneksi database 
$koneksi = new mysqli("localhost","root","","10118131_akademik");

if (!isset($_SESSION['admin'])) {
  # code...
    echo "<script>alert('Anda Harus Sign In');</script>";
  echo "<script>location='signin.php';</script>";
  exit();
}

function tglIndonesia($str){
  $tr   = trim($str);
  $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
  return $str;
} 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>10118131 | Akademik</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.14.0-web/css/all.min.css"/>
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-expand-lg bg-primary fixed-top" role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
      </div>
      <img style="float: left; padding: 5px 5px 5px 20px" src="img/logo_unikom.png">
      <div class="navbar-brand" style="color: #333;" href="index.php">INDONESIA COMPUTER UNIVERSITY</div>
      <div style="color: #333; padding: 15px 20px 15px 20px; float: right;font-size: 16px;"> 
        <span style="margin-right:20px"><?php echo tglIndonesia(date('D, d F, Y')); ?></span>
        <a href="index.php?page=signout" style="color: #333;"><i class="fa fa-sign-out-alt" data-toggle="tooltip" title="signout"></i></a>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-home "></i> Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=mahasiswa"><i class="fa fa-user-graduate "></i> Daftar Mahasiswa</a>
                </li>
                <li>
                    <a href="index.php?page=matakuliah"><i class="fa fa-list "></i> Daftar Mata Kuliah</a>
                </li>
                <li>
                    <a href="index.php?page=nilai"><i class="fa fa-paper-plane "></i> Nilai Mahasiswa</a>
                </li>
            </ul>
        </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <?php 
            if (isset($_GET['page']))
            {
                if ($_GET['page']=="dashboard")
                {
                    include 'dashboard.php';
                }
                else if ($_GET['page']=="mahasiswa")
                {
                    include 'mahasiswa.php';
                }
                else if ($_GET['page']=="tambahmahasiswa")
                {
                    include 'tambahmahasiswa.php';
                }
                else if ($_GET['page']=="editmahasiswa")
                {
                    include 'editmahasiswa.php';
                }
                else if ($_GET['page']=="hapusmahasiswa")
                {
                    include 'hapusmahasiswa.php';
                }
                else if ($_GET['page']=="matakuliah")
                {
                    include 'matakuliah.php';
                }
                else if ($_GET['page']=="tambahmatkul")
                {
                    include 'tambahmatkul.php';
                }
                else if ($_GET['page']=="editmatkul")
                {
                    include 'editmatkul.php';
                }
                else if ($_GET['page']=="hapusmatkul")
                {
                    include 'hapusmatkul.php';
                }
                else if ($_GET['page']=="nilai")
                {
                    include 'nilai.php';
                }
                else if ($_GET['page']=="tambahnilai")
                {
                    include 'tambahnilai.php';
                }
                else if ($_GET['page']=="editnilai")
                {
                    include 'editnilai.php';
                }
                else if ($_GET['page']=="hapusnilai")
                {
                    include 'hapusnilai.php';
                }
                else if ($_GET['page']=="signin")
                {
                    include 'signin.php';
                }
                else if ($_GET['page']=="register")
                {
                    include 'register.php';
                }
                else if ($_GET['page']=="signout")
                {
                    include 'signout.php';
                }
            }
            else
            {
                include 'dashboard.php';
            }
            ?>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script type="text/javascript" src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script type="text/javascript" src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- DATA TABLES -->
<script type="text/javascript" src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="assets/js/dataTables/jquery.dataTables.js"></script>

</body>
</html>
