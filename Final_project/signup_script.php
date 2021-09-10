<?php
require './includes/common.php';
$name = $_POST['name'];
$name = mysqli_real_escape_string($con,$name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);

$contact = $_POST['contact'];
$contact = mysqli_real_escape_string($con,$contact);

$city = $_POST['city'];
$city = mysqli_real_escape_string($con,$city);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con,$address);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";


$dupl_query = "SELECT user_id from users where email='$email'";
$dupl_email = mysqli_query($con,$dupl_query) or die(mysqli_error($con));
$dupl_row = mysqli_num_rows($dupl_email);
if($dupl_row != 0){
    //echo 'Email id already exists';
    header('location:signup.php');
}

else{
    $signup_query = "INSERT INTO users(name, email, password, contact, city, address ) VALUES ('$name','$email','$password','$contact','$city','$address')";
    $new_user = mysqli_query($con,$signup_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id']= $user_id;
    $_SESSION['email']=$email;
    //echo "Successfully Registered";
    header('location:home.php');
}

?>