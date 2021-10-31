<?php 
    error_reporting(E_ALL & E_NOTICE);
	$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
	$kode_jenis = $_GET['kode_jenis'];	
	$submit = $_POST['submit'];
	$delete = "DELETE FROM jenis_buku WHERE kode_jenis ='$kode_jenis'";

	mysqli_query($conn, $delete);
	echo "<script>alert('data berhasil dihapus');document.location.href='jenis_buku.php';</script>";
?>