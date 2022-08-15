<!DOCTYPE html>
  <html>
    <?php
        include_once 'inc/head.php';
    ?>
    <body style="background-image: url('./images/pexels-demian-smit-449559.jpg'); background-size: cover; z-index: -1;object-fit: cover;">
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
                <h6 class="justify-content: center" style="justify-content: center; font-size:x-large ;font-weight:bolder;">Sign Up</h6>
                <p  class="justify-content: center orange darken-1"style="border-radius: 25%; font-size:medium ;font-weight:bolder;">Fill in the form and click sign up. . . . . </p>
          </div>
            <div class="card-action grey lighten-2">
            <?php
                require 'reg.php';
                // require 'inc/signup_form.php';
            ?>
            <form class="" action="reg.php" method="POST">
    <div class="row">
          <div class="txt s12 m12 xs12">
                <input type="hidden" name="uid" class="validate" value="" id="uid" placeholder="   User id"/>
                <span id="c1" class="glyphicon glyphicon-envelope"></span>
          </div>
        </div>
    <div class="row">
          <div class="txt s12 m12 xs12">
                <input type="text" name="f_name" pattern="[A-Za-z]*" class="validate" value="" id="f_name" placeholder="   Firstname"/>
                <span id="c1" class="glyphicon glyphicon-envelope"></span>
          </div>
        </div>
        <div class="row">
          <div class="txt s12 m12 xs12">
                <input type="text" name="l_name" pattern="[A-Za-z]*" class="validate" value="" id="l_name" placeholder="   Lastname"/>
                <span id="c1" class="glyphicon glyphicon-envelope"></span>
          </div>
        </div>
        <div class="row">
          <div class="txt s12 m12 xs12">
                <input type="text" name="username" value="" id="username" placeholder="   Username"/>
                <span id="c1" class="glyphicon glyphicon-envelope"></span>
          </div>
        </div>
        <div class="row">
          <div class="txt s12 m12 xs12">
                <input type="password" name="password" class="validate" value="" id="password" placeholder="   Password"/>
                <span id="c1" class="glyphicon glyphicon-envelope"></span>
          </div>
        </div>

        <div class="row">
          <div class="txt s12 m12 xs12">
          <div class="g-recaptcha" data-sitekey="6LcaDOEcAAAAAMMMjj-8-BQorfN6X5DJIScfRuFz"></div>
          </div>
        </div>
        <div class="row">

       
        <div class="btnsub justify-content: center orange darken-1">
                  <div class="SignUp">
                      <input g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'data-action='submit' type="submit" name="signup" id="btnsub" value="Sign Up"/>
                  </div>
                  <div class="Clear">
                      <input type="button" name="clear" id="btnsub2" value="Clear" onclick="reset();"/>
                </div>                  
            </div>
        </div> 
                        
    </form>
              <script>
                  function reset(){
                      document.getElementById("f_name").value="";
                      document.getElementById("l_name").value="";
                      document.getElementById("username").value="";
                      document.getElementById("password").value="";
                  }
              </script>
               <script>
                function onSubmit(token) {
                    document.getElementById("demo-form").submit();
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