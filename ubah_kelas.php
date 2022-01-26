<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
  </head>
<body>
<div class="container-fluid page-body-wrapper">
        <?php
        include "navbar.php";
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
            <?php 

include "koneksi.php";
$qry_get_kelas=mysqli_query($koneksi,"SELECT * FROM kelas where 
id_kelas = '".$_GET['id_kelas']."'");
$data_kelas=mysqli_fetch_array($qry_get_kelas);
?>

<div class="p-5 mb-4 bg-white text-success">
<div class="container">
    <div class="card">
        <h1 class="card-header">Ubah Kelas</h1>
        <div class="card-body">
        <form action="proses_ubah_kelas.php" method="post">
            <input type="hidden" name="id_kelas" value="<?=$data_kelas['id_kelas']?>">
Nama Kelas :
        <input type="text" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" class="form-control"><br>
Jurusan :
        <input type="text" name="jurusan" value="<?=$data_kelas['jurusan']?>" class="form-control">
        <br>
Angkatan :
        <input type="text" name="angkatan" value="<?=$data_kelas['angkatan']?>" class="form-control">
        <br><br>

        <button type="submit" class="btn btn-success">Ubah Kelas</button><br><br>
</form>
        </div>
    </div>
</div>
</div>
            </div>
        </div>
    </div>

<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
</body>
</html>


  