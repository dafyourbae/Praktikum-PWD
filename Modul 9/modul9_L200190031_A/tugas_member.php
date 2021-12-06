<?php
    session_start();
    error_reporting(E_ALL & E_NOTICE);
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Member</title>
      
    </head>
    <body>  

    <?php echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];?>
    <a href="tugas_logout.php"> Logout </a>
   
    </body>
  </html>