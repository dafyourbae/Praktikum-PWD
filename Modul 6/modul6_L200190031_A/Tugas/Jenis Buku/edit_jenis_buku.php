<?php
    error_reporting(E_ALL & E_NOTICE);
	$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
	$kode_jenis = $_GET['kode_jenis'];
	$cari = "SELECT * FROM jenis_buku WHERE kode_jenis='$kode_jenis'";
	$hasil_cari = mysqli_query($conn,$cari);
	$data = mysqli_fetch_array($hasil_cari);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Gudang Toko</title>
</head>
<body>
	<center>
		<h3>Update Data Jenis Buku</h3>
		<form method="POST" action="update_jenis_buku.php">
			<table border="0" width="30%">
				<tr>
					<td width="25%">Kode Jenis</td>
					<td width="5%">:</td>
					<td width="65%"><input type="text" name="kode_jenis" size="10" value="<?php echo $data[0]?>"></td>
				</tr>
				<tr>
					<td width="25%">Nama Jenis</td>
					<td width="5%">:</td>
					<td width="65%"><input type="text" name="nama_jenis" size="30" value="<?php echo $data[1]?>"></td>
				</tr>
				<tr>
					<td width="25%">Keterangan Jenis</td>
					<td width="5%">:</td>
					<td width="65%"><input type="text" name="keterangan_jenis" size="40" value="<?php echo $data[2]?>"></td>
				</tr>
			</table>
			<input type="submit" value="Ubah Data" name="submit">
		</form>


	</center>
</body>
</html>