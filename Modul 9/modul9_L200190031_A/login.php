<?php 
    session_start();
    error_reporting(E_ALL & E_NOTICE & E_DEPRECATED);
    $conn = mysqli_connect('localhost','root','','informatika');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if($submit) {
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        if($row['username']!=""){
            // berhasil login
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
?>
            <script language script="Javascript">
                alert('Anda Login Sebagai <?php echo $row['username']; ?>');
                document.location='hasillogin.php';
            </script>
<?php 
        }else{
            // gagal login
?>
        <script language script="Javascript">
            alert('Gagal Login');
            document.location='login.php';
        </script>
<?php
        }
    }
?>
<form action="login.php" method="post">
    <p align='center'>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </p>
</form>