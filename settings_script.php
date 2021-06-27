<?php
require 'common.php';
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
$email=$_SESSION['email'];
$old_password=mysqli_real_escape_string($con,md5($_POST['old_password']));
$new_password=mysqli_real_escape_string($con,md5($_POST['new_password']));
$re_password=mysqli_real_escape_string($con,md5($_POST['re_password']));

if(strcmp($new_password,$re_password)!=0){
    header('location:settings.php?password_error=Retype new password');
    exit;
}

$q="SELECT password from users where email= '$email' ";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
$rows=mysqli_num_rows($res);

/*if($rows==0){
    header('location:settings.php?pass_error=old password did not match');
    exit;
}*/
$row=mysqli_fetch_array($res);
if(strcmp($old_password,$row['password'])!=0){
    header('location:settings.php?pass_error=old password did not match');
    exit;
}
    $qry="update users set password='$new_password' where email='$email' ";
    $run=mysqli_query($con,$qry) or die(mysqli_error($con));
    header('location:settings.php?success=password updated successfully!');

?>