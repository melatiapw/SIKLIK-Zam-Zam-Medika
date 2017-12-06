<?php
	include"connect.php";
	
	$id = $_GET['id'];
	$sql_delete = "DELETE FROM pasien WHERE id_pasien	 = '$id'";
	if (mysqli_query($connect, $sql_delete)){
?>
		<script language="javascript">alert("Data Pasien Berhasil Dihapus");</script>
		<script>document.location.href='daftar_pasien.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Terjadi Kesalahan, Gagal Menghapus Data");</script>
		<script>document.location.href='daftar_pasien.php;</script>
<?php
	}
	mysqli_close($connect);
?>