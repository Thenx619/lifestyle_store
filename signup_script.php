<?php
require 'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$query="select id from users where email='$email' ";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
$rows=mysqli_num_rows($res);
//echo $rows;
if($rows>0){
    header('location:signup.php?error=email already exists');
    exit;
}
$q="insert into users(name,email,password,phone,city,address)values('$name','$email','$password','$contact','$city','$address')";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);

header('location:product.php');
?>