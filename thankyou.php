<!DOCTYPE html>
  <html>
    <?php
        include_once 'inc/head.php';
    ?>
    <body style="background-image: url('./images/pexels-evgeniy-grozev-960919.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
    <?php
        include_once 'inc/navbar.php';
    ?>
    <div class="row ContentOne">
   
      <div class="ContentTwo col s12 m12 xs12 text-white">
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content blue-grey darken-1 white-text">
                <div class="card-panel blue-grey darken-3">
                      <span class="blue-text justify-content: center" style="justify-content: center; font-size:x-large ;font-weight:bolder"><i class="small material-icons">sentiment_very_satisfied</i>Thank you !!!</span>
                </div>
                <div class="card-panel blue-grey darken-3 " style="justify-content: center; font-size:x-large; font-style: oblique; padding-top: 100px; padding-bottom: 100px; padding-left:50px; padding-right:50px">
                <?php
                    include_once 'reg.php';
                ?>
                <h3 style="justify-content: center; font-size:x-large; font-style: oblique; padding-left:50px; padding-right:50px">User has been created Successfully !!! Wait,  You'll be redirected to the Home Page shortly.............</h3> 
                </div>
            </div>
          </div>
      </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
    <?php
     header( "refresh:3;url=/clc/create.php" );
    ?>
  </html>