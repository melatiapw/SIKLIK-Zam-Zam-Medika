<?php
	include"connect.php";

	$id = $_GET['id'];
	$sql_delete = "DELETE FROM dokter WHERE id_dokter	 = '$id'";
	if (mysqli_query($connect, $sql_delete)){
?>
		<script language="javascript">alert("Data Dokter Berhasil Dihapus");</script>
		<script>document.location.href='daftar_dokter.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Terjadi Kesalahan, Gagal Menghapus Data");</script>
		<script>document.location.href='daftar_dokter.php;</script>
<?php
	}
	mysqli_close($connect);
?>
