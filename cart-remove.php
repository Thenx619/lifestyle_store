<?php
require 'common.php';
$item_id=$_GET['pid'];

$email=$_SESSION['email'];
$qry="SELECT id from users where email= '$email' ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];
/*echo $user_id;
echo $item_id;*/
/*$q="select id from users_items where user_id='$user_id' and product_id='$item_id'";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
$rows=mysqli_num_rows($res);
if($rows==0){
    header('location:index.php');
}
$row=mysqli_fetch_array($res);
echo $row['id'];*/
$q="delete from users_items where user_id='$user_id' and product_id='$item_id'";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
header('location:cart.php');
?>