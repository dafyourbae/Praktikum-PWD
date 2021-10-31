<?php 
	error_reporting(E_ALL & E_NOTICE);
	$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
	$kode_buku = $_GET['kode_buku'];	
	$submit = $_POST['submit'];
	$delete = "DELETE FROM buku WHERE kode_buku ='$kode_buku'";

	mysqli_query($conn, $delete);
	echo "<script>alert('data berhasil dihapus');document.location.href='buku.php';</script>";
?>