<?php
require './includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php'; ?>
        <title>Lifestyle Store-Sign Up</title>
    </head>

    <body>
        <?php
        include './includes/header.php'; 
        ?>

        <div class="container">
            <div class='row_style'>
                <h4>Change Password</h4>
                <form action="settings_script.php" method="POST" class='form'>
                    <div class='form-group'>
                        <input class='form-control' placeholder="Old Password" name='oldp' required >
                    </div>
                    <div class='form-group'>
                        <input class='form-control' placeholder="New Password" name='newp' required pattern=".{6,}">
                    </div>
                    <div class='form-group'>
                        <input class='form-control' placeholder="Re-type New Password" name='repass' required pattern=".{6,}">
                    </div>
                    <button type='buton' class='btn btn-primary' name='change'>Change</button>
                </form>
            </div>
        </div>

        <?php
        include './includes/footer.php'; 
        ?>
        
    </body>
</html>