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
                    

<div class="p-5 mb-4 bg-white text-success">
    <div class="container"><br>
    <div class="card">
            <h1 class="card-header">Tambah Siswa</h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Siswa</h2><br>
    <form action="proses_tambah_siswa.php" method="post"><br>
    <span>NISN: </span>
            <input type="text" name="nisn" placeholder=" Masukkan NISN" class="form-control" id="exampleInputID1" required>
            
        </div>
        <br>
    <div class="mb-3">
            <span>NIS : </span>
            <input type="text" name="nis" placeholder=" Masukkan NIS" class="form-control" required>
        </div>
        <br>
    Nama Siswa :
        <input type="text" name="nama" value="" placeholder=" Masukkan Nama Siswa" class="form-
            control"><br><br>
   
    Kelas :
        <select name="id_kelas" class="form-control">
        <option selected>--Pilih Kelas--</option> 
        <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option
            value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
        ?>
        </select><br><br>
    Alamat :
       <textarea name="alamat" placeholder=" Masukkan Alamat" class="form-control"
            rows="4"></textarea><br>
    No. Telpon :
        <input type="number" name="no_tlp" placeholder=" Masukkan No. Telepon Anda" class="form-
            control"><br><br>
        </select><br>
         
            <button type="submit" name="tambah" class="btn btn-success">Tambah Siswa</button><br><br>
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

 