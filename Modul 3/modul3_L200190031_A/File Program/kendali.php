<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kendali</title>
</head>
<body>
    <h1>Nilai</h1>
    <form action="kendali.php" method="POST">
        <p>Masukan Nilai Angka (0-100) : <input type="number" name="nilai" size="3"></p>
        <p><input type="submit" value="proses" name="submit"></p>
    </form>
</body>
<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nilai = $_POST['nilai'];
    $submit = $_POST['submit'];
if ($submit) {
    if ($nilai == '') {
        $huruf = 'nilai kosong/belum diisi';
    } elseif ($nilai <= 20) {
        $huruf = 'E';
    } elseif ($nilai <= 40) {
        $huruf = 'D';
    } elseif ($nilai <= 60) {
        $huruf = 'C';
    } elseif ($nilai <= 80) {
        $huruf = 'B';
    } elseif ($nilai <= 100) {
        $huruf = 'A';
    } else {
        $huruf = 'Nilai yang dimasukan salah!';
    }
    echo ("Nilai angka adalah $nilai </br>");
    echo ("maka nilai huruf adalah $huruf");
    }
?>
</html>