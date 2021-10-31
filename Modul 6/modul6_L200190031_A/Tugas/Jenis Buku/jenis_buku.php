<!DOCTYPE html>
<html>
<head>
	<title>Data Jenis Buku</title>
</head>
<?php
	$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
?>
<body>
	<center>
		<form method="POST" action="jenis_buku.php">
			<table border="0" width="30%">
				<tr>
					<td width="25%">Kode Jenis</td>
					<td width="5%">:</td>
					<td width="65">
						<input type="text" name="kode_jenis" size="20">
					</td>
				</tr>
				<tr>
					<td width="25%">Nama Jenis</td>
					<td width="5%">:</td>
					<td width="65">
						<input type="text" name="nama_jenis" size="40">
					</td>
				</tr>
				<tr>
					<td width="25%">Keterangan Jenis</td>
					<td width="5%">:</td>
					<td width="65">
						<input type="text" name="keterangan_jenis">
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Masukkan">
		</form>
		<?php 
				error_reporting(E_ALL & E_NOTICE);
				$kode_jenis = $_POST["kode_jenis"];
				$nama_jenis = $_POST["nama_jenis"];
				$keterangan_jenis = $_POST["keterangan_jenis"];
				$submit = $_POST["submit"];
				$input="INSERT INTO jenis_buku(kode_jenis, nama_jenis, keterangan_jenis) VALUES ('$kode_jenis', '$nama_jenis', '$keterangan_jenis')";
				if ($submit) {
					if ($kode_jenis=='') {
						echo "</br>kode tidak boleh kosong, harus diisi";
					}elseif ($nama_jenis=='') {
						echo "</br>Nama gudang tidak boleh kosong, harus diisi";
					}elseif ($keterangan_jenis=='') {
						echo "</br> Lokasi gudang tidak boleh kosong, harus diisi";
					}else{
						mysqli_query($conn, $input);
						echo "</br>Data berhasil dimasukkan";
					}
				}	
			?>
			<hr>
			<h3>Data Jenis Buku</h3>
			<table border="1" width="50%" style="text-align: center">
			<tr>
				<td width="20%"><b>Kode Jenis</b></td>
				<td width="30%"><b>Nama Jenis</b></td>
				<td width="10%"><b>Keterangan Jenis</b></td>
				<td width="10%"><b>Keterangan</b></td>
			</tr>

			<?php 
				$cari = "SELECT * FROM jenis_buku ORDER BY kode_jenis";
				$hasil_cari = mysqli_query($conn, $cari);
				while ($data = mysqli_fetch_row($hasil_cari)) {
					echo "
					<tr>
						<td width='20%'>$data[0]</td>
						<td width='30%'>$data[1]</td>
						<td width='10%'>$data[2]</td>
						<td width='10%'><a href='edit_jenis_buku.php?kode_jenis=$data[0]'>Edit</a> | 
						<a href='delete_jenis_buku.php?kode_jenis=$data[0]'>Delete</a></td>
					</tr>";
				}
			?>
			</table>
	</center>
</body>
</html>