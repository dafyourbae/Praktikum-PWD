<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
        <?php
            $conn = mysqli_connect('localhost','root','','informatika');
        ?>
        <body>
            <center>
                <h3>Masukkan Data Mahasiswa :</h3>
                    <table border='0' width='30%'>
                    <form method='POST' action = 'tugas1.php'>
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
                            <td width='65%'><input type='radio' value='A' chechked name='kelas'>A
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
                    <input type='submit' value='Masukkan' name='submit'>
                    </form>
                    <?php
                    error_reporting(0);
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $alamat = $_POST['alamat'];
                    $submit = $_POST['submit'];
                    $input = "insert into mahasiswa (nim, nama, kelas, alamat)values
                    ('$nim', '$nama', '$kelas', '$alamat')";
                    if ($submit){
                        if ($nim==''){
                            echo "</br>NIM tidak boleh kosong";
                        }elseif ($nama==''){
                            echo "</br>Nama tidak boleh kosong";
                        }elseif ($alamat==''){
                            echo "</br>Alamat tidak boleh kosong";
                        }else
                            mysqli_query($conn, $input);
                            echo "
                            <script>
                            alert('data berhasil dimasukkan');
                            document.location.href='tugas1.php';
                            </script>";
                    }
                    ?>
                    <hr>
                    <h3>Data Mahasiswa</h3>
                    <table width='50%' style="text-align: center;" border=1>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                        </tr>
                        <?php
                        $cari = "SELECT * FROM mahasiswa ORDER BY nim"; 
                        $hasil_cari = mysqli_query($conn,$cari);
                        while($data = mysqli_fetch_row($hasil_cari)){
                        echo"
                        <tr>
                            <td width='20%'>$data[0]</td>
                            <td width='40%'>$data[1]</td>
                            <td width='10%'>$data[2]</td>
                            <td width='30%'>$data[3]</td>
                            <td align='center' width='30%'><a href='edit1.php?NIM=$data[0]'>Edit</a></td>
                        </tr>";
                        }
                        ?>
                    </table>
             </center>
        </body>
</html> 