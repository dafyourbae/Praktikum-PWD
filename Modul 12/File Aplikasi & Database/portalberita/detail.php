<div class="mainpage">

	<div class="content">

		<?php 

		$id = (isset($_GET['id']) ? $_GET['id'] : '');

		global $connect;

		$sql = mysqli_query($connect,"SELECT * FROM berita WHERE Terbit='1' AND ID = '".$id."' ");
		while ($b = mysqli_fetch_array($sql)) {
		extract($b);

		$Updateviewnum = mysqli_query($connect,"UPDATE berita SET Viewnum=Viewnum+1 WHERE ID = '".$id."' ");
		
		echo'
		<div class="detail">
			<h1>'.$Judul.'</h1>

			<div class="info">
				<span> Tanggal: '.$Tanggal.' </span> | <span> Update by: '.$Updateby.' </span>
			</div>
			 <div class="img">
			 	<img src="'.URL_SITUS.$Gambar.'">

			 	<div class="teks-foto">'.$Teks.'</div>

			 </div>
			 
			 <p>'.nl2br($Isi).'</p>
			 <div class="clear"></div>
		</div>

		';

		}
		?>
		<div class="clear"></div>



	</div>

	<div class="sidebar">

		<?php 
		include 'sidebar.php';
		 ?>
		
	</div>

	<div class="clear"></div>

</div>