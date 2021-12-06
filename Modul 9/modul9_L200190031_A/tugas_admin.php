<?php
$conn = mysqli_connect('localhost', 'root', '', 'informatika');
?>
<body> 
        <h1 style="text-align: center;">Admin Page</h1>
    <hr>
    <br>
    <center>
        <h3>Data User</h3>
            <table border='1' width='70%' style="text-align: center;">
                <tr>
                    <td width='20%'><b>Username</b></td>
                    <td width='20%'><b>Password</b></td>
                    <td width='20%'><b>Nama</b></td>
                    <td width='20%'><b>Status</b></td>
                    <td width='30%'><b>Pilihan</b></td>
                </tr>
                <?php 
                    $tampil = "SELECT * FROM user";
                    $hasil = mysqli_query($conn, $tampil);
                ?>
                <?php 
                    while($data = mysqli_fetch_row($hasil)){
                ?>
                    <tr>
                        <td><?= $data[0] ?></td>
                        <td><?= $data[1] ?></td>
                        <td><?= $data[2] ?></td>
                        <td><?= $data[3] ?></td>
                        <td>
                            <a href=#>Ubah Data</a> |
                            <a href=#>Hapus Data</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
    </center>
    <!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<p align='center'><button><a href="tugas_logout.php"> Logout </a></button></p>
</body>
</html>