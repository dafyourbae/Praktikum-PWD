<?php 
	error_reporting(E_ALL & E_NOTICE);
	$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
	$kode_buku=$_POST['kode_buku'];
	$nama_buku=$_POST['nama_buku'];
	$kode_jenis=$_POST['kode_jenis'];
	$submit=$_POST['submit'];
	$update="UPDATE buku SET kode_buku='$kode_buku', nama_buku='$nama_buku', kode_jenis='$kode_jenis' WHERE kode_buku='$kode_buku' ";

	mysqli_query($conn,$update);
	echo "
		<script>
		alert('data berhasil di ubah');
		document.location.href='buku.php';
		</script>";
		
?>