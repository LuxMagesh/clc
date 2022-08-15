<?php

session_start();

$message_successfully_added_user = '';
$message_successfully_inserted_into_db = '';
$message_username_already_exists = '';
$message_successfully_deleted_user = '';
$message_not_birthday = "";
$message_countdown = "";
if ( isset( $_POST['submit'] ) )
{
    require 'dbcon.php';
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $jobtitle=$_POST['job_title'];


    require 'dbcon.php';
    $sqlcheck="SELECT * FROM users WHERE username ='$username'";
    $result=mysqli_query($conn,$sqlcheck);
    if(mysqli_num_rows($result) >= 1)
    {
      
        $message_username_already_exists = "<center><h1 class='white-text card'>Sorry...The Username You Provided Already Exists On the System!!! Please Change it to something More Unique </h1></center>";
        print_r($message_username_already_exists);
        header( "refresh:15;url=/bcx/index.php" );
        exit();
    }
        else{
          $sql="INSERT INTO `users`(`f_name`,`l_name`,`username`,`password`,`email`,`mobile`,`address`,`job_title`) 
          VALUES ('$fname','$lname','$username','$password','$email','$mobile','$address','$jobtitle')";
          
          if ($conn->query($sql) === TRUE) {
            $message_successfully_added_user = "<center><h1 class='white-text card'>New record created successfully Created!!!</h1></center>";
            print_r($message_successfully_added_user);
            $_SESSION['message'] = "New record created successfully Created!!!";
            $_SESSION['msg_type'] = "success";
            header( "refresh:15;url=/bcx/index.php" );
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          } 
    
        }

    
} 

if (isset($_GET['delete'])){
  require 'dbcon.php';
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM `users` WHERE uid=$id") or die($mysqli->error());
  $message_successfully_deleted_user = "<center><h1 class='white-text card'>Record has been deleted successfully !!!</h1></center>";
  print_r($message_successfully_deleted_user);
  $_SESSION['message'] = "Record has been deleted successfully !!!!!!";
  $_SESSION['msg_type'] = "danger";
  header( "refresh:15;url=/bcx/index.php" );
  exit();
}

if (isset($_GET['edit'])){
  $name1 = '';
  $lastname1 = '';
  $username1 = '';
  $password1 = '';
  $email1 = '';
  $mobile1 = '';
  $jobtitle1 = '';
  require 'dbcon.php';
  $id = $_GET['edit'];

  $result2 = $mysqli->query("SELECT * FROM `users` WHERE uid=$id") or die($mysqli->error());
  if (count($result2)==1){
    $row = $result2->fetch_array();
    $name1 = $row["f_name"];
    $lastname1 = $row["l_name"];
    $username1 = $row["username"];
    $password1 = $row["password"];
    $email1 = $row["email"];
    $mobile1 = $row["mobile"];
    $jobtitle1 = $row["job_title"];
  }
  $message_successfully_updated_user = "<center><h1 class='white-text card'>Record has been updated successfully !!!</h1></center>";
  print_r($message_successfully_updated_user);
  $_SESSION['message'] = "New record created successfully Updated!!!";
  $_SESSION['msg_type'] = "success";
  header( "refresh:15;url=/bcx/index.php" );
  exit();

}

?>
