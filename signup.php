<?php
require './includes/common.php';

if (isset($_SESSION['email'])){
    header('location: home.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php'; ?>
        <title>Buy_Smart-Sign Up</title>
    </head>

    <body>
        <?php
        include './includes/header.php';
        ?>

        <div class='container'>
            <div class='col-sm-4 theme'>
                <img src='gallery/HomePodSeniorAndJunior.png' alt='Homepod' style='width:100%; padding-top:100px' >
            </div>
            <div class='col-sm-8'>
                        <h2>SIGN UP</h2>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <?php
                                if(isset($_GET['email_err'])){
                                 echo $_GET['email_err'] ;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control"  placeholder="Contact" name="contact" required = "true" >
                                <?php
                                if(isset($_GET['cont_err'])){
                                 echo $_GET['cont_err'] ;
                                }
                            ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true" >
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    
                </div>
            </div>

            <?php
            include './includes/footer.php';
            ?>
    
    </body>
</html>