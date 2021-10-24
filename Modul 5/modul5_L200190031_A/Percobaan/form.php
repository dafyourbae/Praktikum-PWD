<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'informatika');

    ?>
    <body>
        <center>
            <h3>Masukan Data Mahasiswa:</h3>
            <form action="form.php" method="post">
                <table border="0">
                <tr>
                    <td width='25%'>NIM</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='nim' size='10'></td>
                </tr>
                <tr>
                    <td width='25%'>Nama</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='nama' size='30'></td>
                </tr>
                <tr>
                    <td width='25%'>Kelas</td>
                    <td width='5%'>:</td>
                    <td width='65%'>
                        <input type='radio' value='A' chechked name='kelas'>A
                        <input type='radio' value='B' chechked name='kelas'>B
                        <input type='radio' value='C' chechked name='kelas'>C
                    </td>
                </tr>
                <tr>
                    <td width='25%'>Alamat</td>
                    <td width='5%'>:</td>
                    <td width='65%'><input type='text' name='alamat' size='40'></td>
                </tr>
                </table>
                <input type="submit" name="submit" value="Masukkan">
            </form>
            <?php 
            error_reporting(0);
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kelas= $_POST['kelas'];
            $alamat= $_POST['alamat'];
            $submit = $_POST['submit'];
            $input="INSERT INTO mahasiswa (NIM, Nama, Kelas, Alamat) VALUES ('$nim', '$nama', '$kelas', '$alamat')";
            if ($submit){
                if ($nim=='') {
                    echo "<br><b>NIM tidak boleh kosong, diisi dulu</b><br>";
                } elseif ($nama=='') {
                    echo "<br><b>Nama tidak boleh kosong, diisi dulu</b><br>";
                } elseif ($alamat=='') {
                    echo "<br><b>Alamat tidak boleh kosong, diisi dulu</b><br>";
                } else {
                    if (mysqli_query($conn, $input)){
                        echo "</br>Data berhasil dimasukkan";
                    } else {
                        echo "Error: " . $input . "<br>" . mysqli_error($conn);
                    }
                }
            }

            ?>
            <table width='50%'  border="1" style="text-align: center;">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php  
                $cari = "SELECT * FROM mahasiswa ORDER BY nim";
                $hasil_cari = mysqli_query($conn, $cari);
                while($data=mysqli_fetch_row($hasil_cari)){
                    echo"<tr>
                    <td width='20%'>$data[0]</td>
                    <td width='30%'>$data[1]</td>
                    <td width='10%'>$data[2]</td>
                    <td width='30%'>$data[3]</td>
                    </tr>";
                }
                ?>
            </table>
        </center>
    </body>
</html>