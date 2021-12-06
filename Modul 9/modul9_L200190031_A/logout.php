<?php 
    session_start();
    session_destroy();
?>
<script language script="Javascript">
    alert("Anda Telah Logout");
    document.location='login.php';
</script>