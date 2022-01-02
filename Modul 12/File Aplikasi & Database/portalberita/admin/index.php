<?php
include("ceklogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrator - Portal Berita</title>
    <link rel='stylesheet' type="text/css" href="../assets/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Ketik Disini',
                tabsize: 2,
                height: 300 ,});
            }); 
    </script>
</head>
<body>
<div class="wrap shadow mt10 mb10 border">
    <div class="bg_white">
        <h3 class="pd10" class=".button1">Welcome Admin</h3>
        <hr>
        <div class="menu pd10">
            <a href="./">Home</a>
			<a href="?mod=kategori">Kategori</a>
			<a href="?mod=berita">Berita</a>
			<a href="?mod=useradmin">User Admin</a>

            <span class="fr"><a href="?keluar=yes">Log Out</a></span>


        </div>
        <div class="clear"></div>
    </div>
    <div class="pd10">
        <?php
        $mod = $_GET['mod'];
        switch ($mod) {
            case 'useradmin':
                include("useradmin.php");
                break;    
            
            case 'berita':
                include("berita.php");
                break;

            case 'kategori':
                include("kategori.php");
                break;                  
            
            default:
                echo "Selamat Datang ".$_SESSION['loginadminnama']." ";
                
                break;
        }
        ?>
    </div>



</div>
</body>
</html>