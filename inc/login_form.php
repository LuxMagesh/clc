<?php
    echo '<form class="" action="login.php" method="POST">
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
    <div class="btnsub justify-content: center orange darken-1">
              <div class="Login">
                  <input type="submit" name="login" id="btnsub" value="Login"/>
              </div>
              <div class="SignUp">
              <a href="/clc/signup.php" class=""><input type="button" name="signup" id="btnsub2" value="Sign Up"/></a>
                  
            </div>                  
        </div>
    </div> 
                    
</form>'
?>