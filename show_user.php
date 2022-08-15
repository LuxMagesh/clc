<?php 
   require 'dbcon.php';
   $result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
?>