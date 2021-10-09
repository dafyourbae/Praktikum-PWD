<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <title>Variable</title>
</head>
<body>
    <h1>Buku Tamu</h1>
        <form action="variable.php" method="POST">
            <p>Nama : <input type="text" name="nama" size="20"></p>
            <p>Email : <input type="text" name="email" size="30"></p>
            <p>Komentar : <textarea name="komentar" id="komentar" cols="30" rows="3"></textarea></p>
            <p><input type="submit" value="kirim" name="submit"></p>
        </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
        $submit = $_POST['submit'];
        if ($submit) {
            echo ("</br> Nama : $nama");
            echo ("</br> email : $email");
            echo ("</br> komentar : $komentar");
    }
    ?>
</body>
</html>