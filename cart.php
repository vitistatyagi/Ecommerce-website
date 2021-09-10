<?php 
require './includes/common.php';

if(!isset($_SESSION['email'])){
    header('location: products.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php'; ?>
        <title>Buy_Smart-Cart</title>
    </head>

    <body>
        <?php
        include './includes/header.php';
        ?>

        <?php 
        $pro = "SELECT items.price AS price, items.item_id AS pid, items.name AS name 
        FROM 
        users_items 
        INNER JOIN users ON users.user_id = users_items.user_id 
        INNER JOIN items ON items.item_id = users_items.item_id 
        && users_items.status='Added to cart'"; 
        $pro_query = mysqli_query($con,$pro) or die(mysqli_error($con));
        $pro_row = mysqli_num_rows($pro_query);
        if($pro_row==0){
            ?> 
        <div class='container'>
            <div class="jumbotron">
                <center>
                    <h1>Your cart is empty!</h1><br>
                    <img src='gallery/empty_cart.png' width=50%>
                </center>
            </div>
        </div>
            <?php
        } else {
        ?>
        <div class='container'><br><br><br><br><br>
            <div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th colspan="2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sum = 0;
                        while($pro_row = mysqli_fetch_array($pro_query)) {
                            $user_id = $_SESSION['user_id'];
                            $sum += $pro_row["price"];
                            $pid = $pro_row["pid"];
                            echo "<tr>
                            <td>" . "#". $pro_row["pid"]. "</td>
                            <td>". $pro_row["name"] ."</td>
                            <td>Rs " .$pro_row["price"]. "</td>
                            <td><a href='cart-remove.php?id={$pro_row['pid']}' class ='remove_item_link btn btn-danger btn-block'>Remove</a></td></tr>";
                        }   
                            echo "<tr>
                            <td></td>
                            <td>Total</td><td>Rs" . $sum. "</td>
                            <td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>"; } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php 
        include './includes/footer.php';
        ?>

    </body>
</html>