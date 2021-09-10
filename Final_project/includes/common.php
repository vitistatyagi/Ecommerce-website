<?php
$con= mysqli_connect("localhost","root","","buy_smart") or die(mysqli_error($con));
//if($con->connect_error){
//    die("Connection failed: ".$con->connect_error);
//} echo "Connected Successfully";

if(!isset($_SESSION['email'])){
    session_start();
}
?>