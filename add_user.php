<?php

session_start();

// $uid = 0;
$name1 = '';
$lastname1 = '';
$username1 = '';
$password1 = '';
$email1 = '';
$mobile1 = '';
$jobtitle1 = '';

$message_successfully_added_user = '';
$message_successfully_inserted_into_db = '';
$message_username_already_exists = '';
$message_successfully_deleted_user = '';
$message_successfully_updated_user = '';
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
        header( "refresh:15;url=/bcx/create.php" );
        exit();
    }
        else{
          $sql="INSERT INTO `users`(`f_name`,`l_name`,`username`,`password`,`email`,`mobile`,`address`,`job_title`) 
          VALUES ('$fname','$lname','$username','$password','$email','$mobile','$address','$jobtitle')";
          
          if ($conn->query($sql) === TRUE) {
           
            $message_successfully_added_user = "<center><h3 class='blue-text blue-grey darken-3 card' style='justify-content: center; padding-top: 20px; padding-bottom: 20px; padding-left:20px; padding-right:20px'>Well Done !!!</h3></center>";
            print_r($message_successfully_added_user);
            $_SESSION['message'] = "Well Done !!!";
            $_SESSION['msg_type'] = "success";
            header( "refresh:5;url=/bcx/thankyou.php" );
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          } 
    
        }

    
} 


include 'dbcon.php';
// $uid= 0;
if ( isset( $_POST['update'] ) )
{
 
    $uid=$_POST['uid'];
    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $jobtitle=$_POST['job_title'];

    // echo '<pre>',print_r($uid),'</pre>';
    // echo '<pre>',print_r($fname),'</pre>';
    // echo '<pre>',print_r($lname),'</pre>';
    // echo '<pre>',print_r($username),'</pre>';
    // echo '<pre>',print_r($password),'</pre>';
    // echo '<pre>',print_r($email),'</pre>';
    // echo '<pre>',print_r($mobile),'</pre>';
    // echo '<pre>',print_r($address),'</pre>';
    // echo '<pre>',print_r($jobtitle),'</pre>';

    $sql4 = "UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`username`='$username',`password`='$password',`email`='$email',`mobile`='$mobile',`address`='$address',`job_title`='$jobtitle' WHERE `uid`='$uid'";
    $result3 = $conn->query($sql4);

      echo '<pre>',print_r($result3),'</pre>';

    if ($result3 === TRUE) {
        // echo "Record updated successfully";
        $message_successfully_updated_user = "<center><h1 class='white-text card'>Record has been deleted successfully !!!</h1></center>";
        print_r($message_successfully_updated_user);
        $_SESSION['message'] = "Record has been deleted successfully !!!!!!";
        $_SESSION['msg_type'] = "danger";
        header( "refresh:5;url=/bcx/create.php" );
      } else {
        echo "Error updating record: " . $conn->error;
      }
}



if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $conn->query("DELETE FROM `users` WHERE `uid`=$id") or die($mysqli->error());

  $message_successfully_deleted_user = "<center><h3 class='blue-text blue-grey darken-3 card' style='justify-content: center; padding-top: 20px; padding-bottom: 20px; padding-left:20px; padding-right:20px'>Deleted !!!</h3></center>";
  print_r($message_successfully_deleted_user);
  $_SESSION['message'] = "Record has been deleted successfully !!!";
  $_SESSION['msg_type'] = "danger";
  header( "refresh:5;url=/bcx/deleted.php" );
  exit();
}



?>
