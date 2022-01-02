<div class="mainpage">

	<div class="content">

		<?php 
		global $connect;

		$catid = (isset($_GET['id']) ? $_GET['id'] : '');

		$getalias = mysqli_query($connect,"SELECT * FROM kategori WHERE ID='".$catid."'");
		while ($al = mysqli_fetch_array($getalias)) {


			$sql = mysqli_query($connect,"SELECT * FROM berita WHERE Terbit='1' AND Kategori='".$al['alias']."' ORDER BY ID DESC LIMIT 0,10");
			while ($b = mysqli_fetch_array($sql)) {
				extract($b);
			
			echo'
			<div class="boxnews">
				 <div class="img">
				 	<img src="'.URL_SITUS.$Gambar.'">
				 </div>
				 <h1><a href="./?open=detail&id='.$ID.'">'.$Judul.'</a></h1>
				 <p>'.substr(strip_tags($Isi),0,200).'</p>
				 <div class="clear"></div>
			</div>

			';

			}

		}
		?>


	</div>

	<div class="sidebar">

		<?php include 'sidebar.php'; ?>
		
	</div>

	<div class="clear"></div>
</div>

<div class="clear"></div>