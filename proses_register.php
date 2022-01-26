<?php
	if($_POST){
		$nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
		$password=$_POST['password'];
		
		if(empty($nama_petugas)){
			echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($username)){
			echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
		} elseif(empty($password)){
			echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
		} else {
			include "koneksi.php";
			$insert=mysqli_query($koneksi,"insert into petugas (nama_petugas, username, password) value ('".$nama_petugas."','".$username."','".md5($password)."')");
            
			if($insert){
				echo "<script>alert('Sukses menambahkan petugas');location.href='index.php';</script>";
			} else {
				echo "<script>alert('Gagal menambahkan petugas');location.href='register.php';</script>";
			}
		}
	}
?>