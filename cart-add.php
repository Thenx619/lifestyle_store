<?php
require 'common.php';
$item_id=$_GET['id'];

$email=$_SESSION['email'];
$qry="SELECT id from users where email= '$email' ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];

$q="INSERT INTO users_items(user_id,product_id, status) VALUES('$user_id','$item_id', 'Added to cart')";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
header('location:product.php');
exit;
?>
