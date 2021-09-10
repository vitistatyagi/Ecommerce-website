<?php 
require './includes/common.php';
//if (isset($_GET['id']) && is_numeric($_GET['id'])) {
$uid = $_SESSION['user_id'];
$iid = $_GET['id'];
$del_query = "DELETE FROM users_items WHERE user_id='$uid' AND item_id='$iid'";
$del_query_res = mysqli_query($con,$del_query) or die(mysqli_error($con));
header('location: cart.php');
//} 
?>

