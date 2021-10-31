<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<?php
	$conn = mysqli_connect("localhost", "root", "", "perpustakaan");
?>
<body>
	<center>
		<h3>Masukan Data Buku</h3>
		<form method="POST" action="buku.php">
			<table border="0" width="30%">
				<tr>
					<td width="25%">Kode Buku</td>
					<td width="5%">:</td>
					<td width="65">
						<input type="text" name="kode_buku" size="20">
					</td>
				</tr>
				<tr>
					<td width="25%">Nama Buku</td>
					<td width="5%">:</td>
					<td width="65">
						<input type="text" name="nama_buku" size="40">
					</td>
				</tr>
				<tr>
					<td width="25%">Kode Jenis</td>
					<td width="5%">:</td>
					<td width="65">
						<select name="kode_jenis" id="kode_jenis">
							<?php
								$sql = "SELECT * FROM jenis_buku";
								$retval = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($retval)) {
									echo "<option value='$row[kode_jenis]'>$row[kode_jenis]</option>";
								}
							?>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Masukkan">
			</form>
			<?php 
				error_reporting(E_ALL &	 E_NOTICE);
				$kode_buku = $_POST["kode_buku"];
				$nama_buku = $_POST["nama_buku"];
				$kode_jenis = $_POST["kode_jenis"];
				$submit = $_POST["submit"];
				$input="INSERT INTO buku(kode_buku, nama_buku, kode_jenis) VALUES ('$kode_buku', '$nama_buku', '$kode_jenis')";
				if ($submit) {
					if ($kode_buku=='') {
						echo "</br>kode buku tidak boleh kosong, harus diisi";
					}elseif ($nama_buku=='') {
						echo "</br>Nama buku tidak boleh kosong, harus diisi";
					}elseif ($kode_jenis=='') {
						echo "</br> Kode jenis tidak boleh kosong, harus diisi";
					}else{
						mysqli_query($conn, $input);
						echo "</br>Data berhasil dimasukkan";
					}
				}	
			?>
			<hr>
			<h3>Data Buku</h3>
			<table border="1" width="50%" style="text-align: center">
			<tr>
				<td width="20%"><b>Kode Buku</b></td>
				<td width="30%"><b>Nama Buku</b></td>
				<td width="10%"><b>Kode Jenis</b></td>
				<td width="10%"><b>Keterangan</b></td>
			</tr>

			<?php 
				$cari = "SELECT * FROM buku, jenis_buku WHERE buku.kode_jenis=jenis_buku.kode_jenis";
				$hasil_cari = mysqli_query($conn, $cari);
				while ($data = mysqli_fetch_row($hasil_cari)) {
					echo "
					<tr>
						<td width='20%'>$data[0]</td>
						<td width='30%'>$data[1]</td>
						<td width='10%'>$data[2]</td>
						<td width='10%'><a href='edit_buku.php?kode_buku=$data[0]'>Edit</a> | 
						<a href='delete_buku.php?kode_buku=$data[0]'>Delete</a></td>
					</tr>";
				}
			?>
			</table>
	</center>
</body>
</html>