<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>
<body>
<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $direktoi = 'images/';
    $name_foto = $_FILES['foto']['name'];
    $size_foto = $_FILES['foto']['size'];
    $tipe_foto = $_FILES['foto']['type'];
    $upload = $direktoi . $name_foto;
    $submit = $_POST['submit'];

    if ($submit) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
        echo"<h3>File Berhasil Diupload</h3>
        </br></br>
        <img border='0' src='$upload'></br></br>
        <b>Informasi File : </br></b>
        Nama File : $name_foto </br>
        Ukuran File : $size_foto byte </br>
        Tipe File : $tipe_foto </br> ";
    } else {
    ?>
        <form method="POST" enctype="multipart/form-data" action="upload.php">
            Upload File : <input type="file" name="foto" size="20"></br>
            <input type="submit" name="submit" value="upload">
        </form>
    <?php
    }
    ?>
</body>
</html>