<!DOCTYPE html>
  <html>
  <?php
        include_once 'inc/head.php';
    ?>

<style>

.about-img{
    width: 600px;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    justify-content: center;

    border-radius: 10%;
}
</style>
    <body style="background-image: url('./images/pexels-pixabay-257636.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
    <?php
        include_once 'inc/navbar2.php';
    ?>
    <div class="row ContentOne">
    <div class="ContentTwo col s12 m6 xs12 text-white">
      <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
                <div class="row align-items-center justify-content-around flex-row-reverse">
                    <div class="col-lg-5 text-center">
                        <div class="about-img">
                        <?php
                         require 'avatars.php'; 
                        for ($i=0; $i<1; $i++)
                        {
                        ?>
                            <img src="<?php   echo $array[rand(0, count($array) - 1)] ?>">
                            <?php          
                          }
                         ?>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
      </div>
<div class="ContentOne col s12 m6 xs12 text-white">
      <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content blue-grey darken-1 white-text">
                <div class="row align-items-center justify-content-around flex-row-reverse">
                    <div class="col-lg-6">
                    <?php
                    require 'dbcon.php';
                    if (isset($_GET['uid'])){
                        $uid = $_GET['uid'];
                        
                        $sql5 = "SELECT * FROM `users` WHERE uid=$uid";
                        $result5 = $conn->query($sql5);
                        
                        if ($result5->num_rows > 0){
                        while($row = $result5->fetch_assoc()){
                            $uid = $row['f_name'];
                            $name = $row['f_name'];
                            $lastname = $row['l_name'];
                            $username1 = $row['username'];
                            $password1 = $row['password'];
                            $role1 = $row['role'];
                        ?>
                        <div class="about-text">
                            <h4 class="theme-color"><?php echo print_r(rtrim($name)); ?> <?php echo print_r($lastname); ?></h4>
                            <h6 class="theme-color">Username : <?php echo print_r($username1); ?></h6>
                            <h6 class="theme-color">Role : <?php echo print_r($role1); ?></h6>
                    
                        </div>     
                            <?php
                                    }
                                }
                            }
                    ?>
                    </div>
                </div>
        </div>
      </div>
    </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
  </html>