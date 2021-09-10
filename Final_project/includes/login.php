<?php
require './includes/common.php';

if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php'; ?>  
        <title>Buy_Smart-Login</title>
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>

        <div class='container'>
            <div class='row_style'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        <h4>LOGIN</h4>
                    </div>
                    <div class='panel-body'>
                        <p class='text-warning'>Login to make a purchase</p>
                        <form method='POST' action='login_script.php' class="form">
                            <div class='form-group'>
                                <input type="email" class="form-control"  placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </div>
                            <div class='form-group'>
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                            </div>
                            <button type='submit' data-dismiss='modal' class='btn btn-primary'>Login</button>
                        </form> 
                    </div>
                    <div class='panel-footer'>
                        Don't have an account<a href='signup.php'> Register</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include './includes/footer.php';
        ?>

    </body>
</html>