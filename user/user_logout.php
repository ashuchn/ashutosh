<?php 

session_start();
session_unset();
session_destroy();
header("location: userlogin.php");
echo "Logged out successfully";
exit();

?>