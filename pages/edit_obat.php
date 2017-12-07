<?php
include 'connect.php';
if(!isset($_SESSION['login_user'])){
		header("Location: login.php");
}else{
  if(isset($_POST['edit'])){
  $id     = $_POST['id_obat'];
  $nama    = $_POST['nama_obat'];
  $stok = $_POST['stok_obat'];
	
	$hargabeli = $_POST['harga_beli_obat'];
	$hargajual = $_POST['harga_jual_obat'];
	
   $queryupdate = mysqli_query($connection, "UPDATE obat SET nama_obat = '$nama',
		stok_obat='$stok',
		harga_beli_obat='$hargabeli',
		harga_jual_obat='$hargajual' WHERE id_obat = $id");
   if($queryupdate){
   header('location: daftar_obat.php');
    }else{
      echo "Upss Something wrong..";
    }
  }
}
   ?>