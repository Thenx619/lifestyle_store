<?php
require 'common.php';
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='style.css'>
        <title>Lifestyle Store</title>
        
    </head>
    <body>
       <?php
           require 'header.php';
         
           $email=$_SESSION['email'];
           $qry="SELECT id from users where email= '$email' ";
           $result=mysqli_query($con,$qry) or die(mysqli_error($con));
           $roni=mysqli_fetch_array($result);
            $user_id=$roni['id'];

           $q="select product_id,name,price from users_items inner join items on users_items.product_id=items.id where users_items.user_id='$user_id'";
           $res=mysqli_query($con,$q) or die(mysqli_error($con));
           $rows=mysqli_num_rows($res);
           if($rows==0){
               echo "Add items to the cart first!";
           }
           else{
        ?> 
        
        <br><br><br><br>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                    <table class='table table-striped'>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <?php 
                          $sum=0;
                          while($row=mysqli_fetch_array($res)){
                         ?>
                          
                        <tr>
                            <td><?php echo $row['product_id']; $pro_id=$row['product_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; $sum=$sum+$row['price']; ?></td>
                            <td> 
                                
                                <a href="cart-remove.php?pid=<?php echo $pro_id; ?>"  class='remove_item_link'> Remove</a>
                            </td>
                        </tr>
                        <?php
                          }
                        ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $sum; ?></td>
                            <td><a href="success.php?id=<?php echo $user_id; ?> "><buton type='Confirm Order' value='Confirm Order' class='btn btn-primary btn-block'>Confirm Order</button></a></td>
                        </tr>
        
                    </table>
                </div>
            </div>
        </div>
        <?php
           }
         ?>  
       
       
        <?php
           require 'footer.php';
       ?>
</body>
</html>