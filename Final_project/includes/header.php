    <nav class='navbar navbar-default navbar-fixed top'> 
        <div class='container'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#header'>
                <span class='glyphicon glyphicon-menu-hamburger'></span>
                </button>
                <a href='index.php' class='navbar-brand'>BUY SMART</a>
            </div>
            <div class='collapse navbar-collapse' id='header'>
                <ul class='nav navbar-nav navbar-right'>
                <?php 
                if(!isset($_SESSION['email'])){ ?>
                    <li><a href='signup.php' class='glyphicon glyphicon-user'> SignUp</a></li>
                    <li><a href="#" type="button" data-toggle="modal" data-target="#loginModal" class="glyphicon glyphicon-log-in"> Login</a></li>
                    <li><a href='about.php' class='glyphicon glyphicon-book'> AboutUs</a></li>
                    <li><a href='contact.php' class='glyphicon glyphicon-earphone'> Contact</a></li>
                <?php 
                } else{ 
                    ?>   
                    <li><a href='cart.php' class='glyphicon glyphicon-shopping-cart'> Cart</a></li>
                    <li><a href='setting.php' class='glyphicon glyphicon-cog'> Settings</a></li>
                    <li><a href='logout.php' class='glyphicon glyphicon-log-out'> Logout</a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

<?php if(isset($_SESSION['email'])){
  header('location:home.php');
} else { ?>
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title text-center">
            LOGIN
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        </h2>
      </div>
      <div class="modal-body">
          <form action="login_script.php" method="POST">
                <div class="form-group">
                    <p>Don't have an Account? <a href="signup.php" >Register</a></p>
                </div>
                <div class="form-group">
                    <input type='email' name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                    <?php
                      if(isset($_GET['error'])){
                      echo $_GET['error'] ;
                      }
                    ?>
                </div>
                <div class='form-group'>
                  <button type="submit" name="submit" class="btn btn-primary" >Login</button>
                </div>
          </form>
            <div class="form-group modal-footer">
                <p><a href="#" >Forgot Password?</a></p>
            </div>
      </div>
    </div>
  </div>
</div>
                    <?php } ?>