<?php
$message_succesful_login = '';
if ( isset( $_POST['login'] ) )
{
    require 'dbcon.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE (username ='$username' AND password ='$password') ";
    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
        session_start();
        $_SESSION["user"] = $username;
        // $message_succesful_login = "<center><h1 class='white-text card'>You have Succesfully Logged In!!!</h1></center>";
        // print_r($message_succesful_login);
        header( "refresh:0.1;url=/clc/success.php" );
        exit();
    }else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
        } 
  
    
} 
?>