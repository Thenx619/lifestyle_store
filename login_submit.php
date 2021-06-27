<?php
require 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$query="SELECT id,email from users where email='$email' and password='$password'";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
$rows=mysqli_num_rows($res);
//echo $rows;
if($rows==0){
    header('location:login.php?info_error=incorrect email or password');
    exit;
}
$row=mysqli_fetch_array($res);
$_SESSION['email']=$row['email'];
$_SESSION['id']=mysqli_insert_id($con);
header('location:product.php');
?>
