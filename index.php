<!DOCTYPE html>
  <html>
    <?php
        include_once 'inc/head.php';
    ?>
    <body style="background-image: url('./images/pexels-pranjal-srivastava-2403251.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
    <?php
        include_once 'inc/navbar.php';
    ?>
    <div class="row ContentOne" >
      <div class="ContentTwo col s12 m4 xs12 text-white">
        <div class="card horizontal">
          <div class="card-stacked">
              <!-- <div class="card-content blue-grey darken-1 white-text">
              </div> -->
          </div>
        </div>
      </div>
      <div class="ContentOne col s12 m4 xs12" style="margin-top: 3.8%;">
    <div class="card horizontal" >
    <div class="card-stacked" >
        <div class="card-content blue-grey darken-1 white-text" >
          <div class="card-panel blue-grey darken-3 justify-content: center" style="border-radius: 5%;">
          <a href="#" class="justify-content: center" style="margin-top: 0.4%; margin-left: 0.7%;">
              <img src="./images/logo_white.png" style="height: 25px!important; width:110px!important">
          </a> 
          </div>
                <h6 class="justify-content: center" style="justify-content: center; font-size:x-large ;font-weight:bolder;">Welcome back!</h6>
                <p  class="justify-content: center orange darken-1"style="border-radius: 25%; font-size:medium ;font-weight:bolder;">Log in and continue. . . . . </p>
          </div>
            <div class="card-action grey lighten-2">
            <?php
                include_once 'login.php';
                include_once 'inc/login_form.php';
                ?>
              <script>
                  function reset(){
                      document.getElementById("username").value="";
                      document.getElementById("password").value="";
                  }
              </script>
            </div>
           
          </div>
        </div>

      </div>
      <div class="ContentTwo col s12 m4 xs12 text-white">
        <div class="card horizontal">
          <div class="card-stacked">
              <!-- <div class="card-content blue-grey darken-1 white-text">
              </div> -->
          </div>
        </div>
      </div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/js/materialize.min.js"></script>
    </body>
    
  </html>