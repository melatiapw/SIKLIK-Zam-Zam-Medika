<?php
include('connect.php');
  $id = $_GET['id'];
  $data = mysqli_query($connection, "DELETE FROM obat WHERE id_obat = $id");
  if($data){
  header('location: daftar_obat.php');
 }else{
  echo "Upss Something wrong..";
 }
?>