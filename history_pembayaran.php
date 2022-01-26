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
    ?>
    <br></br>
    <div class="Container col-md-9 square rounded p-3" style="margin-left:auto; margin-right:auto; border-color:white; background-color:white; text-align:left;">
        <div class="card-header" style="color:white; background-color:white; text-align:left">
        
            <h2 style="color:green">History Pembayaran</h2>
            <br>
            <form action="history_pembayaran.php" method="post" class="d-flex">
            <Input class="form-control me-2" type="search" name="cari" placeholder="search">
            <button type="submit" class="btn btn-outline-success">search</button>
            </form> 
        </div>
        <div class="card-body">
            <table class="table table-striped table-success"> 
            <thead>
        <tr style="color:green;">
            <th scope="col">id petugas</th>
            <th scope="col">Nisn</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Spp Bulan</th>
            <th scope="col">Spp Tahun</th>
            <th scope="col" style="text-align:center">aksi</th>
        </tr>
        </thead>
    <tbody style="color:white;">
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_bayar = mysqli_query($koneksi,
            "SELECT * FROM pembayaran where bulan_spp = ' $cari ' or nisn like '$cari%' ORDER BY bulan_spp DESC");
        }else {
            //jika tidak ada keyword pencarian 
            $query_bayar = mysqli_query($koneksi,"select * from pembayaran ORDER BY bulan_spp DESC");
        }
        while ($data_bayar=mysqli_fetch_array($query_bayar)) { ?>
        <?php
        $query_siswa = mysqli_query($koneksi, "select * from siswa where nisn = '".$data_bayar['nisn']."'");
        $data_siswa = mysqli_fetch_array($query_siswa);
        ?>
              <tr style="color:black">
              <input type="hidden" value="<?php echo $data_bayar['id_pembayaran']?>">
                  <td><?php echo $data_bayar["id_petugas"]; ?></td>
                  <td><?php echo $data_bayar["nisn"]; ?></td>
                  <td><?php echo $data_siswa["nama"]?></td>
                  <td><?php echo $data_bayar["tgl_bayar"]; ?></td>
                  <td><?php echo $data_bayar["bulan_spp"];?></td>
                  <td><?php echo $data_bayar["tahun_spp"];?></td>
                  <td>
  
                      <a href="hapusBayar.php?id_pembayaran=<?=$data_bayar['id_pembayaran']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td> 
              </tr>
            <?php
            }
            ?>
        </tbody>
            <br>
        </table><a href="transaksi.php" class="btn btn-success">pembayaran</a> 
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
    <script src="./js/dashboard.js"></script></div>  
    </div>
</body>
</html>