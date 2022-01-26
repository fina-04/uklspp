<!doctype html>
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
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php
   
    include "koneksi.php";
    ?>
      <div class="container">
        <main class="form-signin">
        <form action="proses_register.php" method="POST">
          <br>
          <br>
          <br>
          <br><br>
          <img class="mb-4" src="foto/dynamiteee ini-01.png" alt="" width="300" >
            
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" 
            name="nama_petugas" placeholder="Insert Nama" required>
            <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
            <input type="username" class="form-control" id="floatingInput" 
            name="username" placeholder="Insert Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" 
            name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
            <p class="mb-3 text-muted">&copy; 2021</p>
        </form>
        </main>
        </div>
        
  </body>
</html>