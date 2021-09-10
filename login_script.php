<?php
require './includes/common.php';

$emailid = $_POST['email'];
$emailid = mysqli_real_escape_string($con, $emailid);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);


$login_query = "SELECT email, user_id FROM users WHERE email = '$emailid' AND password = '$pass'";
$login_query_res = mysqli_query($con, $login_query) or die(mysqli_error($con));

$rows_fetched = mysqli_num_rows($login_query_res); 

if($rows_fetched==0){
    $error = "<span class='red'>Wrong Credentials</span>";
    header("location:signup.php");
}
else{
    $count = mysqli_fetch_array($login_query_res);
    $_SESSION['email'] = $emailid;
    $_SESSION['user_id']=$count['user_id'];
    header('location:home.php');
}
   
?>