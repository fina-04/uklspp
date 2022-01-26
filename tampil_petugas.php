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

        <?php
    include "navbar.php";
    ?>
    <br><br>
    <div class="container">
    <h1>Data Petugas</h1>
    <form action = "tampil_petugas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Petugas"/>
    </form><br><br>
    <a href="tambah_petugas.php" class="btn btn-secondary">Tambah Kelas</a>
    <table class="table table-primary table-striped">
  <thead>
    <tr>
      <th scope="col">ID Petugas</th>
      <th scope="col">Nama Petugas</th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_petugas = mysqli_query($koneksi, "select * from petugas where id_petugas like '%$cari%' or nama_petugas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_petugas = mysqli_query($koneksi, "select * from petugas");
    }
    while ($data_petugas = mysqli_fetch_array($query_petugas)){?>
        <tr> 
            <td><?php echo $data_petugas["id_petugas"];?></td>
            <td><?php echo $data_petugas["nama_petugas"];?></td>
            <td><?php echo $data_petugas["username"];?></td>
            <td><?php echo $data_petugas["level"];?></td>

            <td><a
            href="ubah_petugas.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus.php?id_petugas=<?=$data_petugas['id_petugas']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a>
            </td>

        </tr>
    <?php
    }
    ?>
  </tbody>
</table>

 <br>
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