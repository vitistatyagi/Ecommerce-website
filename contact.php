<?php 
require './includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php' ?>
        <title>Buy_Smart-Contact us</title>
    </head>
    <body>
        <?php include './includes/header.php' ?>

        <div class='row'>
            <div class='container'>
                <div class='col-md-10 col-sm-8'>
                    <h1>LIVE SUPPORT</h1>
                    <p>24 hours | 7 days a week | 365 days a year Live Technical Support<br>We provide free support for all Buy Smart products. Get help with a Buy Smart product, or ask about a previous puchase from the online or physical store. All you need to do is just fill the form bellow or dial the number +91 123-000000. We are always here for you.</p>
                </div>
                <div class='container'>
                    <div class='col-md-2 col-sm-4'>
                        <img src='gallery/assitance.png' width='100%'>
                    </div>
                </div>
            </div>
        </div>
        <div class='row''>
            <div class='container'>
                <div class='col-sm-8'>
                    <h1>CONTACT US</h1>
                    <form method='POST' action='#' class='form'>
                        <div class='form-group'>
                            <label for="name">Name</label><br>
                            <input type='text' class='form-control' name='name' required>
                        </div>
                        <div class='form-group'>
                            <label for="email" >Email</label><br>
                            <input type='email' class='form-control' name="email" required>
                        </div>
                        <div class='form-group'>
                            <label for='msg'>Message</label><br>
                            <textarea class='form-control' name='msg'></textarea>
                        </div>
                        <button class='btn btn-primary' value="submit">Submit</button>
                    </form>
                </div>
                <div class='col-sm-4'>
                    <h1>Company Information</h1>
                    <p>500 Dolor sit Lorem Ipsum,<br><br>22-56-2-9 Sit Lorem, Amet,<br><br>India<br><br>Phone: (00) 222 666 555<br><br>Fax: (000) 000 00 00 00<br><br>Email: info@mycompany.com<br><br>Follow us: Twitter, Facebook</p>
                </div>
            </div>
        </div>

        <?php include './includes/footer.php' ?>
    </body>
</html>