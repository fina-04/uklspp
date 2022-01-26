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
        <h1>Data Siswa</h1>
        <form action="transaksi.php" method="POST">
          <input type="text" name="cari" class="form-control" placeholder="Masukkan NISN\Nama Siswa" />
        </form>
        <br>

        <br><br>
        <table class="table table-success table-striped">
          <thead>
            <tr>

              <th scope="col">NISN</th>
              <th scope="col">NIS</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Alamat</th>
              <th scope="col">No. Telepon </th>
              <th scope="col">Nama Kelas</th>
              <th scope="col">Bayar</th>


            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            if (isset($_POST["cari"])) {
              //jika ada keyword pencarian
              $cari = $_POST['cari'];
              $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where siswa.nisn like '%$cari%' or siswa.nama like '%$cari%'");
            } else {
              //jika tidak ada keyword pencarian
              $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            }
            while ($data_siswa = mysqli_fetch_array($query_siswa)) { ?>
              <tr>

                <td><?php echo $data_siswa["nisn"]; ?></td>
                <td><?php echo $data_siswa["nis"]; ?></td>
                <td><?php echo $data_siswa["nama"]; ?></td>
                <td><?php echo $data_siswa["alamat"]; ?></td>
                <td><?php echo $data_siswa["no_tlp"]; ?></td>
                <td><?php echo $data_siswa["nama_kelas"]; ?></td>
                <td><a href="pembayaran.php?nisn=<?= $data_siswa['nisn'] ?>" class="btn btn-success">Bayar</a>
                <td>

                </td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
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