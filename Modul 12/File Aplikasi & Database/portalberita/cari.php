<div class="mainpage">

	<div class="content">


		<?php 
		global $connect;

		$get_key = $_GET['key'];

		$key = explode(" ", $get_key);

		sort($key);

		$stradd = '';

		foreach ($key as $val) {
			
			if($stradd !='') {

				$stradd .= " OR Isi LIKE '%{$val}%' OR Judul LIKE '%{$val}%' ";


			}else {

				$stradd .= " Isi LIKE '%{$val}%' OR Judul LIKE '%{$val}%' ";

			}

		}

		echo'
		<button class="pd10 mb10">Hasil pencarian kata kunci : '.str_replace('+',' ', $get_key).'</button>
		';

		$sql = mysqli_query($connect,"SELECT * FROM berita WHERE $stradd AND Terbit='1' ORDER BY ID DESC LIMIT 0,10");
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



		?>


	</div>

	<div class="sidebar">

		<?php include 'sidebar.php'; ?>
		
	</div>

	<div class="clear"></div>
</div>

<div class="clear"></div>