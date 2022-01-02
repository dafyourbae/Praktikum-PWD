<?php 
if (isset($_POST['add'])) {
	
	global $gambar;
	//cek apakah ada gambar
	if(!empty($_FILES['gambar']['name']) && ($_FILES['gambar']['error'] !== 4 ))
	{
		$gambarfile = $_FILES['gambar']['tmp_name'];
		$gambarfile_name = $_FILES['gambar']['name'];

		$filetype = $_FILES['gambar']['type'];

		$allowtype = array('image/jpeg', 'image/jpg', 'image/png');

		if(!in_array($filetype, $allowtype))
		{

			echo 'Invalid file type';
			exit;
		}

		$path = PATH_GAMBAR.'/';

		if( isset($gambarfile) && isset($gambarfile_name) ) {

			$gambarbaru = preg_replace("/[^a-zA-Z0-9]/", "_", $_POST['judul']);

			$dest1 = '../'.$path.$gambarbaru.'.jpg';
			$dest2 = $path.$gambarbaru.'.jpg';


			copy($_FILES['gambar']['tmp_name'], $dest1);

			$gambar = $dest2;

		} else {

			$gambar = $_POST['gambar'];
		}
	}
	//tambah
	if($_POST['aksi']=='tambah')
	{
	global $connect;
		$sql = "INSERT INTO berita (Judul,Isi,Kategori,Gambar,Teks,Tanggal,Viewnum,Updateby,Post_type,Terbit) VALUES ('".$_POST['judul']."','".$_POST['isi']."','".$_POST['kategori']."','$gambar','".$_POST['teks']."','".date("Y-m-d H:i:s")."','0','".$_SESSION['loginadmin']."','berita','".$_POST['terbit']."')";

		$hasil = mysqli_query($connect,$sql);
	}
	//edit
	if($_POST['aksi']=='edit')
	{
		global $connect;
		$sql = mysqli_query($connect,"UPDATE berita SET Judul='".$_POST['judul']."',Isi='".$_POST['isi']."',Kategori='".$_POST['kategori']."',Gambar='$gambar',Teks='".$_POST['teks']."',Terbit='".$_POST['terbit']."' WHERE ID='".$_POST['id']."' ");
	}

}
//mengambil pada saat edit
if(isset($_GET['act']) && $_GET['act']=='edit'){

	$id = (int)$_GET['id'];
	global $connect;

	$sql = mysqli_query($connect,"SELECT * FROM berita WHERE ID='$id' ");
	while($b = mysqli_fetch_array($sql)){
		extract($b);

		$id = $ID;
		$judul = $Judul;
		$kategori = $Kategori;
		$isi = $Isi;
		$gambar = $Gambar;
		$teks = $Teks;
		$tanggal = $Tanggal;
		$updateby = $Updateby;
		$terbit = $Terbit;
		//hapus gambar saat edit
		if(isset($_GET['hapusgambar']) && $_GET['hapusgambar']=='yes')
		{
			unlink('../'.$gambar);
			$sqlupdate = mysqli_query($connect,"UPDATE berita SET Gambar='' WHERE ID='$id' ");

			echo'<meta http-equiv="REFRESH" content="0;url=./?mod=berita&act=edit&id='.$id.'" />';
		}

	}

}
//hapus
if(isset($_GET['act']) && $_GET['act']=='hapus'){

	$id = (int)$_GET['id'];
	global $connect;

	$sql = mysqli_query($connect,"SELECT * FROM berita WHERE ID='$id' ");
	while($b = mysqli_fetch_array($sql)){

		$gbr = $b['Gambar'];
		unlink('../'.$gbr);
	}

	$hapus = mysqli_query($connect,"DELETE FROM berita WHERE ID='$id' ");

	}

?>
<div class="w100">
	<form action="./?mod=berita" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=(isset($id) ? $id : '')?>">
		<input type="hidden" name="aksi" value="<?=(isset($id) ? 'edit' : 'tambah');?>">
		<fieldset>
			<legend>Tambah Berita</legend>

			<div class="formnama">
			<label>Judul</label>:<br>
			<input type="text" name="judul" placeholder="Judul berita" value="<?=(isset($judul) ? $judul : '')?>" size="40">
			</div>

			<div class="formnama">
			<label>Kategori</label>:<br>
			<select name="kategori">
				<option>Pilih kategori</option>
				<?php 
				global $connect;
				$hasil = mysqli_query($connect,"SELECT * FROM kategori WHERE Terbit='1' ORDER BY ID DESC");
				while ($k = mysqli_fetch_array($hasil)) {
					
					echo '
					<option value="'.$k['alias'].'" '.($kategori==$k['alias'] ? 'selected' :'').' >'.$k['Kategori'].'</option>
					';
				}

				 ?>
			</select>
			</div>

			<div class="formnama">
			<label>Isi berita</label>:<br>
			<textarea name="isi" cols="80" rows="8" class="summernote"><?=(isset($isi) ? $isi : '')?></textarea>

			</div>

			<div class="formnama">
			<label>Gambar</label>:<br>
			<?php 
			if(!empty($gambar) && !empty($id) ){
				echo'
				<div class="imgsedang">
				<input type="hidden" name="gambar" value="'.$gambar.'">
				<img src="'.URL_SITUS.$gambar.'">
				<div class="imghapus"><a href="./?mod=berita&act=edit&hapusgambar=yes&id='.$id.'">x</a></div>
				</div>

				';
			}else
			{

				echo'<input type="file" name="gambar">';
			}

			 ?>
			
			</div>
			<div class="clear pd10"></div>

			<div class="formnama">
			<label>Teks</label>:<br>
			<textarea name="teks" cols="30" rows="5"><?=(isset($teks) ? $teks : '')?></textarea>
			</div>

			<div class="formnama">
			<label>Terbitkan</label>:<br>
				<select name="terbit">
					<option value="1" <?=((isset($terbit) && $terbit==1) ? 'selected' :'')?>>Yes</option>
					<option value="0" <?=((isset($terbit) && $terbit==0) ? 'selected' :'')?>>No</option>
				</select>
			</div>

			<input type="submit" name="add" value="<?=(isset($id) ? 'Edit' :'Tambah')?>" class="btn-primary">

		</fieldset>
		
	</form>

</div>

<div class="clear"></div>

<div class="w100">
	<fieldset>
		<legend>List Berita</legend>

		<div class="w100 list fl bold bg_dark">
			<div class="w10 fl">ID</div>
			<div class="w40 fl">Judul</div>
			<div class="w20 fl">Kategori</div>
			<div class="w20 fl">Tanggal</div>
			<div class="w10 fl">Aksi</div>
		</div>

		<?php 
		global $connect;

		$hasil = mysqli_query($connect,"SELECT * FROM berita ORDER BY ID DESC");
		while ($b = mysqli_fetch_array($hasil)) {
			extract($b);
			?>

			<div class="w100 list fl">
			<div class="w10 fl"><?=$ID;?></div>
			<div class="w40 fl"><?=$Judul;?></div>
			<div class="w20 fl"><?=$Kategori;?></div>
			<div class="w20 fl"><?=$Tanggal;?></div>
			<div class="w10 fl">
				<a href="./?mod=berita&act=edit&id=<?=$ID;?>" class="btn-primary pd5">edit</a>
				<a href="./?mod=berita&act=hapus&id=<?=$ID;?>" class="btn-red pd5">hapus</a>

			</div>
		</div>
		<?php
		}
	?>

	</fieldset>
</div>