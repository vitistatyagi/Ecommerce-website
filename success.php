<?php 
require './includes/common.php';

if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
    <?php include './includes/links.php' ?>
        <title>Buy Smart-Success</title>
    </head>
    <body>
        <?php include './includes/header.php';
        require 'confirm.php';
        ?>

        <div class='container'>
            <div class="jumbotron">
                <center>
                    <p>Thank You for shopping with us.<br>The order shall be delivered to you shortly.
                </center><hr>
                <center>
                    Order some more exquisite items <a href='home.php'>Shop Now</a></p>
                </center>
            </div>
        </div>
    </body>
</html>