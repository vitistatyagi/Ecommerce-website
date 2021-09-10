<?php 
require './includes/common.php';

if(!isset($_SESSION['email'])){
    header('location: index.php');
} else{
$cur_email = $_SESSION['email'];

$oldpass = $_POST['oldp'];
$oldpass = mysqli_real_escape_string ($con , $oldpass);
$oldpass = md5($oldpass);

$newpass = $_POST['newp'];
$newpass = mysqli_real_escape_string ($con , $newpass);
$newpass = md5($newpass);

$repass = $_POST['repass'];
$repass = mysqli_real_escape_string($con, $repass);
$repass = md5($repass);

$change_query = "SELECT * FROM users WHERE email='$cur_email' AND password='$oldpass' ";
$change_query_rel = mysqli_query($con,$change_query);
$row_pass = mysqli_num_rows($change_query_rel);

if ( $newpass == $repass && $row_pass > 0 ) {
    $success = "<span class='green'>Password Changed</span>";
    $pass_update = "UPDATE users SET password= '$newpass' WHERE users.email='$cur_email' AND users.password='$oldpass' ";
    $rel_pass_update = mysqli_query($con,$pass_update) or die(mysqli_error($con));
    header('location:home.php');
    //echo "Successfully Updated!";
} else {
    header('location: setting.php');
    //echo "Error";
}
}
?>