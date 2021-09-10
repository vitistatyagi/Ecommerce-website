<?php 
require './includes/common.php';
//if (isset($_GET['item_id']) && is_numeric($_GET['id'])) {
$pro_id = $_GET['id'];
$user_id = $_SESSION['user_id']; 
$in_query = "INSERT INTO users_items(user_id, item_id, status) VALUES ('$user_id','$pro_id','Added to cart')";
$in_query_rel = mysqli_query($con,$in_query) or die(mysqli_error($con));
header('location:home.php');
//}
?>