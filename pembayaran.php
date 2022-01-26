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
            <br>
    <br>
    <?php
    include "koneksi.php";  
    $id = $_SESSION['id_petugas'];
    $qry_get_nisn=mysqli_query($koneksi,"SELECT * FROM siswa where nisn = '".$_GET['nisn']."'");
    $data_siswa=mysqli_fetch_array($qry_get_nisn);
    ?>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="color:green">Proses Pembayaran</h3>
                        <p>Masukkan data di bawah</p>
                        <form class="requires-validation" action="proses_pembayaran.php" method="post" novalidate>
                            <div>
                                <input type="hidden" value="<?=$data_siswa['nisn']?>" name="nisn"></input>
                            </div>
                            <div>
                                <h3>ID Petugas : <?=$id?></h2>
                            </div>
                           <div class="col-md-12">
                                <select class="form-select mt-3" name="bulan_spp" required>
                                      <option selected disabled value="">Bulan</option>
                                      <option value="1">januari</option>
                                      <option value="2">februari</option>
                                      <option value="3">maret</option>
                                      <option value="4">april</option>
                                      <option value="6">juni</option>
                                      <option value="7">Juli</option>
                                      <option value="8">agustus</option>
                                      <option value="9">September</option>
                                      <option value="10">oktober</option>
                                      <option value="11">November</option>
                                      <option value="12">Desember</option>
                               </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                           </div>

                           <div class="col-md-12">
                              <input class="form-control" type="text" name="tahun_spp" placeholder="Tahun" required>
                               <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Password field cannot be blank!</div>
                           </div>
                           <br>
                           <button type="submit" class="btn btn-success" style="color:white; text-align:center">S u b m i t</button> 
                           <br>
                        </form>
                    </div>
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