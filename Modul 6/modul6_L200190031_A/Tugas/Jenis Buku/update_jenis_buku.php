<?php 
	error_reporting(E_ALL & E_NOTICE);
	$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
	$kode_jenis=$_POST['kode_jenis'];
	$nama_jenis=$_POST['nama_jenis'];
	$keterangan_jenis=$_POST['keterangan_jenis'];
	$submit=$_POST['submit'];
	$update="UPDATE jenis_buku SET kode_jenis='$kode_jenis', nama_jenis='$nama_jenis', keterangan_jenis='$keterangan_jenis' WHERE kode_jenis='$kode_jenis' ";

	mysqli_query($conn,$update);
	echo "
		<script>
		alert('data berhasil di ubah');
		document.location.href='jenis_buku.php';
		</script>";
		
?>