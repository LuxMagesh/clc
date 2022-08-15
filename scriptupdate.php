<?php
 include 'dbcon.php';

 $message_successfully_updated_user = '';
 if ( isset( $_POST['update'] ) )
 {
     $uid=$_POST['uid'];
     $fname=$_POST['f_name'];
     $lname=$_POST['l_name'];
     $username=$_POST['username'];
     $password=$_POST['password'];


     $sql4 = "UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`username`='$username',`password`='$password' WHERE `uid`='$uid'";
     $result3 = $conn->query($sql4);
     if ($result3 === TRUE) {
        $sql6 = "UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`username`='$username',`password`='$password' WHERE `uid`='$uid'";
        $result4 = $conn->query($sql6);

        $message_successfully_updated_user = "<center><h1 class='white-text card'>Record has been updated successfully !!!</h1></center>";
        print_r($message_successfully_updated_user);
             $_SESSION['message'] = "Record has been deleted successfully !!!!!!";
             $_SESSION['msg_type'] = "danger";
             header( "refresh:5;url=/clc/create.php" );
             exit();

     } 
  else {
    echo "Error updating record: " . $conn->error;
  }
  }

?>