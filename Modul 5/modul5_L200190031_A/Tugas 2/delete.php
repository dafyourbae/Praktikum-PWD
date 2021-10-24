<?php
	$conn = mysqli_connect('localhost','root','','penyimpanan');

	$kode=$_GET['KODE'];
	$hapus="DELETE FROM gudang WHERE nama_gudang='$kode'";
	$data=mysqli_query($conn,$hapus);

	if($data > 0){
		echo "
		<script>
		alert('data deleted');
		document.location.href='gudangform.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='gudangform.php';
		</script>";
?>