<?php   
    $conn = new mysqli("localhost", "root", "", "rumah_sakit");
    $query = 'select * from pasien';
    $result = mysqli_query($conn, $query);
    error_reporting(E_ALL & E_NOTICE);
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $no_ktp = $_POST['no_ktp'];
        $nama_pasien = $_POST['nama_pasien'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tanggal_lahir = $_POST['tgl']."/".$_POST['bln']."/".$_POST['thn'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
        $agama = $_POST['agama'];
        $keluhan = $_POST['keluhan'];
        $nama_dokter = $_POST['nama_dokter'];

        $sql = "INSERT INTO pasien(id_pasien, no_ktp, nama_pasien, jenis_kelamin, tanggal_lahir, alamat, nohp, agama, keluhan, nama_dokter) VALUES 
        ('$id', '$no_ktp', '$nama_pasien', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$nohp', '$agama', '$keluhan', '$nama_dokter')";
        $simpan = mysqli_query($conn, $sql);
        echo   "<script>
                    alert('Data berhasil disimpan')
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head><title>No 3</title></head>
<body>
    <center>
        <form action="no3.php" method="POST">
            <table border style="text-align: left;">
                <tr>
                    <td colspan="2"><center><b>PENDAFTARAN PASIEN</b></center></td>
                </tr>
                <tr>
                    <td>ID Pasien</td>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <td>No. KTP</td>
                    <td><input type="text" name="no_ktp" required></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama_pasien" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="laki-laki" required>laki-laki
                        <input type="radio" name="jenis_kelamin" value ="perempuan" required>perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <input type="text" name="tgl" size="1" required maxlength="2" placeholder="dd">/
                        <input type="text" name="bln" size="1" required maxlength="2" placeholder="mm">/
                        <input type="text" name="thn" size="1" required maxlength="4" placeholder="yyyy">/
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>No.HP</td>
                    <td><input type="text" name="nohp" required maxlength="12"></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Hindu</option>
                            <option value="Hindu">Budha</option>
                            <option value="Budha">Khatolik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td><input type="text" name="keluhan" required></td>
                </tr>
                <tr>
                    <td>Dokter yang menangani</td>
                    <td>
                        <select name="nama_dokter" required>
                            <?php
                                $querydokter = 'select nama_dokter from dokter';
                                $listdokter = mysqli_query($conn, $querydokter);
                                foreach($listdokter as $key){
                                    $key = $key['nama_dokter'];
                                    echo "<option value='$key'>$key</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="SUBMIT"></td>
                </tr>
            </table>
        </form>
        <br><br>
        <b>DATA PASIEN</b>
        <table border style="text-align: center;">
            <tr>
                <td>No.</td>
                <td>ID pasien</td>
                <td>No. KTP</td>
                <td>Nama lengkap</td>
                <td>Jenis Kelamin</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>No. HP</td>
                <td>Agama</td>
                <td>Keluhan</td>
                <td>Dokter yang menangani</td>
            </tr>
            <?php
                $no= 1;
                while ($key = mysqli_fetch_row($result)){
                    echo "
                        <tr>
                            <td>$no</td>
                            <td>$key[0]</td>
                            <td>$key[1]</td>
                            <td>$key[2]</td>
                            <td>$key[3]</td>
                            <td>$key[4]</td>
                            <td>$key[5]</td>
                            <td>$key[6]</td>
                            <td>$key[7]</td>
                            <td>$key[8]</td>
                            <td>$key[9]</td>
                        </tr>
                    ";
                    $no += 1;
                }
            ?>
        </table>
</body>
</html>