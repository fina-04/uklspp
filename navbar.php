<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location:index.php');
} ?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?= $_SESSION['nama_petugas'] ?>

          </p>
          <p class="designation">Administrator</p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Dashboard</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="home.php">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="tampil_siswa.php" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Data Siswa</span>
        <i class="icon-user menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="tampil_kelas.php" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Data Kelas</span>
        <i class="icon-layers menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="tampil_spp.php" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Data SPP</span>
        <i class="icon-layers menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="transaksi.php" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Transaksi</span>
        <i class="icon-layers menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="history_pembayaran.php"></a>History Pembayaran</li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="history_pembayaran.php" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">History Pembayaran</span>
    
        <i class="icon-doc menu-icon"></i>
    </a>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="laporan.php" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Laporan</span>
    
        <i class="icon-doc menu-icon"></i>
    </a>
    <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="profil.php" aria-expanded="false" aria-controls="auth">
        <span class="menu-title">Profile</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="profil.php"> Profil </a></li>
          <li class="nav-item"> <a class="nav-link" href="proses_logout.php"> Log Out </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="proses_logout.php" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Log Out</span>
        <i class="icon-user menu-icon"></i>
      </a>
    </li>
</nav>