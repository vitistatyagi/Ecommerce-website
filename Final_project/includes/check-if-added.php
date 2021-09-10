<?php 

function check_if_added_to_cart($item_id){
    $user_id = $_SESSION['user_id'];
    require 'common.php';
    $check_item = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
    $check_item_rel = mysqli_query($con,$check_item);
    $cart_rows = mysqli_num_rows($check_item_rel);
    if($cart_rows>=1){
        return 1;
    }
    else{
        return 0;
    }
}

?>