<?php
require 'common.php';
function check_if_added($item_id){
    require 'common.php';

    $email=$_SESSION['email'];
$qry="SELECT id from users where email= '$email' ";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$user_id=$row['id'];

    $query="SELECT * FROM users_items WHERE product_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $res=mysqli_query($con,$query) or die(mysqli_error($con));
    $rows=mysqli_num_rows($res);
    if($rows>=1)
    return 1;
    else
    return 0;
    
}
?>