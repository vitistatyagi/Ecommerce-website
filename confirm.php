<?php 
require './includes/common.php';

if(!isset($_SESSION['email'])){
    header('location:index.php');
}  
        $u_id=$_SESSION['user_id'];
        $success_query = "UPDATE users_items SET status = 'Confirmed' WHERE users_items.user_id= '$u_id' AND status='Added to cart' ";
        $update_res = mysqli_query($con, $success_query) or die(mysqli_error($con));

        
?>