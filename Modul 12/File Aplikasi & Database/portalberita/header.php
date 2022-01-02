<?php 
include("inc/fungsi.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Portal Berita</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="shortcut icon" href="Icon.png">
</head>
<body>
	<div class="wrap">
		<div class="pd10">

		<header>
			<div class="logo">
				<img src="<?=URL_SITUS.PATH_LOGO.'/'.FILE_LOGO;?>">
			</div>
			<div class="clear"></div>

			<nav>
				
				<a href="./">Home</a>
				<?php 
				global $connect;

				$menu = mysqli_query($connect,"SELECT * FROM kategori WHERE Terbit='1' ORDER BY ID ASC LIMIT 0,10");
				while ($r = mysqli_fetch_array($menu)) {
					extract($r);
					
					echo'
					<a href="./?open=cat&id='.$ID.'">'.$Kategori.'</a>
					';
				}

				 ?>

				 <form action="" method="GET" class="btn fr" style="margin-top:-5px; margin-right: -8px;">
				 	<input type="text" name="key" placeholder="Cari..">
				 	<input type="submit" name="open" value="cari">
				 </form>
			</nav>
		</header>
