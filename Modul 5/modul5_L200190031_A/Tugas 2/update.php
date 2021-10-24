<?php
		error_reporting(E_ALL & E_NOTICE);
			$conn = mysqli_connect('localhost','root','','penyimpanan');
			$kode = $_GET['KODE'];
			$cari = "SELECT * FROM gudang WHERE kode_gudang = '$kode'";
			$hasil_cari = mysqli_query($conn,$cari);
			$data = mysqli_fetch_array($hasil_cari);

			if($_POST['submit']){
				$kode=$_POST['kode'];
				$nama=$_POST['nama'];
				$lokasi=$_POST['lokasi'];
				if ($kode==''){
					echo "kode tidak boleh kosong, diisi dulu";
				}else if ($nama==''){
					echo "Nama tidak boleh kosong";
				}elseif ($lokasi==''){
					echo "Lokasi tidak boleh kosong";
				}else{
		
					$update="UPDATE gudang set kode_gudang='$kode', nama_gudang='$nama',lokasi='$lokasi' WHERE kode_gudang='$kode' ";
					mysqli_query($conn,$update);
					echo "
					<script>
					alert('data updated');
					document.location.href='gudangform.php';
					</script>";
				}
			}
			if($data > 0){

		?>
<html>
	<head>
		<title>Data Gudang</title>
	</head>
		<body>
			<center>
				<h3>Update Data Gudang :</h3>
					<table border='0' width='30%'>
					<form method='POST' action = 'update.php'>
						<tr>
							<td width='25%'>Kode Gudang</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='kode' size='10'value="<?php echo $data['kode_gudang']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Nama Gudang</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='nama' size='30'value="<?=$data['nama_gudang']?>"></td>
						</tr>
						<tr>
							<td width='25%'>Lokasi</td>
							<td width='5%'>:</td>
							<td width='65%'><input type='text' name='lokasi' size='40'value="<?=$data['lokasi']?>"></td>
						</tr>
					</table>
					<input type='submit' value='submit' name='submit'>
					</form>
				</center>	
				<?php
				}
				?>				
	    </body>
</html>