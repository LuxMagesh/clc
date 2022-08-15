<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
// header("location:/clc/index.php"); //to redirect back to "index.php" after logging out
header( "refresh:2;url=/clc/index.php" ); //to redirect back to "index.php" after logging out
exit();
?>