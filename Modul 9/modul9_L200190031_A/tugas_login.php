<form method='post' action='tugas_login.php'>
    <center><h2>Login</h2>
        <p align='center'>
        username : <input type='text' name='username'><br>
        password : <input type='password' name='password'><br>
        <input type='submit' name='submit'>
        </p>
    </center>
</form>
<?php
    session_start();
    error_reporting(E_ALL & E_NOTICE & E_DEPRECATED);
    $conn = mysqli_connect('localhost', 'root', '', 'informatika');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if ($submit){
        $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if ($row['username'] != ""){
            //berhasil login
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
            if ($row['status']=='Administrator') {
                $_SESSION['status']='Administrator';
                ?>
                <script language script="JavaScript">
                alert('Anda Login Sebagai <?php echo $row['username']; ?>');
                document.location='tugas_admin.php';
                </script>
                <?php
            }else {
                ?>
                <script language script="JavaScript">
                alert('Anda Login Sebagai <?php echo $row['username']; ?>');
                document.location='tugas_member.php';
                </script>
                <?php
            }
        }else{
            //gagal login
            ?>
            <script languange script = "Javascript">
                alert ("Gagal Login");
                document.location = 'tugas_login.php';
            </script>
            <?php
        }
    }
?>