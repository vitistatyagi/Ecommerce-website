<?php 
require './includes/common.php';

if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include './includes/links.php'; ?> 
        <title>BUY-SMART</title>
    </head>
    <body>
        <?php
        include './includes/header.php';
        include './includes/check-if-added.php';
        $email = $_SESSION['email'];
        ?>
        

     <div class='content'>
     <div class='container'>
        <div class='row'>
            <div class='jumbotron'>
                <?php
                    echo "<h2 class='text-center'>Welcome $email</h2>";
                ?>            
            </div>
        </div>
     </div>
      <div class='container-fluid'>
        <div class='row '> <!--1st row starts-->
            <div class='col-md-4 col-sm-12'>
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 1</div>
                        <div class="panel-body"><img src='gallery/Echo-Dot-with-Clock.jpg' alt='Echo Dot' style='width:100%'></div>
                        <div class="panel-footer">
                            <h3>Amazon Echo Dot</h3>
                            <p>Price: ₹ 4,499.00</p>
                            <?php 
                            if(check_if_added_to_cart(1)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                        </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 2</div>
                       <div class='panel-body'><img src='gallery/echoshow_new.jpg' alt='Echoshow' style='width:100%'></div>
                       <div class='panel-footer'>    
                            <h3>Echoshow</h3>
                            <p>Price: ₹ 12,999.00</p>
                            <?php 
                            if(check_if_added_to_cart(2)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            } ?>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
                <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 3</div>
                       <div class='panel-body'><img src='gallery/Gear-Amazon-Echo-SOURCE-Amazon.jpg' alt='Amazon Gear' style='width:100%'></div>
                       <div class='panel-footer'>
                           <h3>Gear Amazon Echo</h3>
                           <p>Price: ₹ 9,999.00</p>
                           <?php 
                            if(check_if_added_to_cart(3)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div> <!--1st row ends-->
        <div class='row '> <!--2nd row starts-->
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 4</div>
                       <div class='panel-body'><img src='gallery/Gear-Google-Nest-Hub-Max-Feature.jpg' alt='Google Gear' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>Google Next Gear</h3>
                        <p>Price: ₹ 8,999.00</p>
                        <?php 
                            if(check_if_added_to_cart(4)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 5</div>
                       <div class='panel-body'><img src='gallery/Bose-Home-Speaker-500-Angled-SOURCE-Bose.jpg' alt='Bose Homespeaker' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>Bose Homespeaker</h3>
                        <p>Price: ₹ 35,100.00</p>
                        <?php 
                            if(check_if_added_to_cart(5)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 6</div>
                       <div class='panel-body'><img src='gallery/Gear-JBL-Link-Portable-SOURCE-JBL.jpg' alt='JBL Link Portable' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>JBL Link Portable</h3>
                        <p>Price: ₹ 7,299</p>
                        <?php 
                            if(check_if_added_to_cart(6)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div> <!--2nd row ends-->
        <div class='row '> <!--3rd row starts-->
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 7</div>
                       <div class='panel-body'><img src='gallery/Gear-Sonos_Move_8-FA.jpg' alt='Google Gear' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>Sonos Move</h3>
                        <p>Price: ₹ 28,999.00</p>
                        <?php 
                            if(check_if_added_to_cart(7)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 8</div>
                       <div class='panel-body'><img src='gallery/Yamaha-YAS-209-YAMAHA.jpg' alt='Bose Homespeaker' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>Yamaha YAS-209</h3>
                        <p>Price: ₹ 25,599.00</p>
                        <?php 
                            if(check_if_added_to_cart(8)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12'>
            <div class="panel panel-default text-center">
                    <div class="panel-heading">Speaker 9</div>
                       <div class='panel-body'><img src='gallery/Gear-Speakers-Sonos-Ones-Green.jpg' alt='JBL Link Portable' style='width:100%'></div>
                       <div class='panel-footer'>
                        <h3>Sonos One</h3>
                        <p>Price: ₹ 14,699.00</p>
                        <?php 
                            if(check_if_added_to_cart(9)){ 
                                echo'<a href="#" class="btn btn-block btn-success disabled"> Added to cart</a>';
                            }
                            else{
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div> <!--3rd row ends--><br><br><br><br><br><br>
      </div>
     </div>

     <?php 
     include './includes/footer.php'
     ?>
    </body>
</html>