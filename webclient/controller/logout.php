<?php
setcookie("c_logged_username", '', time()+3600, "/");
header( "Location: ../index.php" );
?>