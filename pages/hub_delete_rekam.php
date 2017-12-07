<?php
	include"connect.php";
	
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM rekam_medis WHERE id_rekam	 = '$id'";
	if (mysqli_query($connect, $sql_delete)){
?>
		<script language="javascript">alert("Data Rekam Medis Berhasil Dihapus");</script>
		<script>document.location.href='buku_pasien.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Terjadi Kesalahan, Gagal Menghapus Data");</script>
		<script>document.location.href='buku_pasien.php;</script>
<?php
	}
	mysqli_close($connect);
?>