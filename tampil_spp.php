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
        <h1>Data SPP</h1>
        <br>
        <a href="tambah_spp.php" class="btn btn-success">Tambah SPP</a>
        <br><br>
        <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col">ID SPP</th>
              <th scope="col">Nama Kelas</th>
              <th scope="col">Angkatan</th>
              <th scope="col">Tahun</th>
              <th scope="col">Nominal</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            if (isset($_POST["cari"])) {
              //jika ada keyword pencarian
              $cari = $_POST['cari'];
              $query_spp = mysqli_query($koneksi, "select * from spp join kelas on kelas.id_kelas=spp.id_kelas where spp.id_spp like '%$cari%' or spp.angkatan like '%$cari%'");
            } else {
              //jika tidak ada keyword pencarian
              $query_spp = mysqli_query($koneksi, "select * from spp join kelas on kelas.id_kelas=spp.id_kelas");
            }
            while ($data_spp = mysqli_fetch_array($query_spp)) {
            ?>
              <tr>
                <td><?php echo $data_spp["id_spp"]; ?></td>
                <td><?php echo $data_spp["nama_kelas"]; ?></td>
                <td><?php echo $data_spp["angkatan"]; ?></td>
                <td><?php echo $data_spp["tahun"]; ?></td>
                <td><?php echo $data_spp["nominal"]; ?></td>

                <td><a href="ubah_spp.php?id_spp=<?= $data_spp['id_spp'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus_SPP.php?id_spp=<?= $data_spp['id_spp'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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