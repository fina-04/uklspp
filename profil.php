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
<div class="container-fluid page-body-wrapper">
        <?php
        include "navbar.php";
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
            <?php 
        include "koneksi.php";?>
                <?php
    $query_profil = mysqli_query($koneksi, "SELECT * FROM petugas
        where id_petugas = '".$_SESSION['id_petugas']."'");
        $data_petugas=mysqli_fetch_array($query_profil);
        ?>
    
        <main class="container"> 
            <br><br><br>
            <h1 style="text-align: center;">Data Profil Anda</h1>
            <hr>
        <section class="container">
            <div class="col">
                <form action=""><input type="hidden" name="id_petugas" value="<?=$data_petugas['id_petugas']?>"></form>
                <table class="table table-hover table-striped mb-4">
                    <thead style="text-align: left;">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$data_petugas["nama_petugas"]?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?=$data_petugas["username"]?></td>
                    </tr>
                    
                    <tr>
                        <td>LEVEL</td>
                        <td>:</td>
                        <td><?=$data_petugas["level"]?></td>
                    </tr>
                    </thead>
                </table>
            </div>

        <a href="home.php" class="btn btn-success">Kembali ke halaman utama</a>
        <!-- <a href="registrasi.php" class="btn btn-success">Registrasi</a> -->
        <div style="float: right;">
            <a
            href="hapus_admin.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus Akun Ini</a> 
        </div>
        </section>
    </main>
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
    <script src="./js/dashboard.js"></script></body>
</html>