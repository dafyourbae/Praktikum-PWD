<?php
	error_reporting(E_ALL & E_NOTICE);
			$conn = mysqli_connect('localhost', 'root','','informatika');
			$nim = $_GET['NIM'];
			$cari = "SELECT * FROM mahasiswa Where nim = '$nim'"; 
			$hasil_cari = mysqli_query($conn,$cari);
	
			while ($data = mysqli_fetch_array($hasil_cari)){
				$nim=$data['nim'];
				$nama=$data['nama'];
				$kelas=$data['kelas'];
				$alamat=$data['alamat'];	
			}

			$nim1=$_POST['nim1'];
			$nama1=$_POST['nama1'];
			$kelas1=$_POST['kelas1'];
			$alamat1=$_POST['alamat1'];
			
			if($_POST['submit']){
				$update="UPDATE mahasiswa set NIM='$nim1', Nama='$nama1', Kelas='$kelas1', Alamat='$alamat1' WHERE nim='$nim1' ";
				$hasil = mysqli_query($conn, $update);
					header('Location: tugas1.php');
			}
		?>
		
<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>	
		<body>
			<center>
				<h3>Update Data Mahasiswa :</h3>
					<table border='0' width='30%'>
					<form method='POST' action = 'edit1
					.php'>
						<tr>
							<td width='25%'>NIM</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nim1' size='10'value="<?= $nim?>"></td>
						</tr>
						<tr>
							<td width='25%'>Nama</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nama1' size='30'value="<?=$nama?>"></td>
						</tr>
						<tr>
							<td width='25%'>Kelas</td>
							<td width='5%'>:</td>
							<td width='65%'>
								<input type='radio' value='A' checked name='kelas1' <?php if ($kelas == "A") {echo 'checked';}?>> A
                       	 		<input type='radio' value='B' name='kelas1' <?php if ($kelas == "B") {echo 'checked';}?>> B
                       			<input type='radio' value='C' name='kelas1' <?php if ($kelas == "C") {echo 'checked';}?>> C
							</td>
						</tr>
						<tr>
							<td width='25%'>Alamat</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='alamat1' size='40'value="<?=$alamat?>"></td>
						</tr>
					</table>
					<input type='submit' value='submit' name='submit'>
					</form>
				</center>
				<?php
				?>
		</body>
</html>	