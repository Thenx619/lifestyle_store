
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
require 'common.php';
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
$uid=$_GET['id'];
/*$qry="select id from users_items where user_id='$uid'";
$run=mysqli_query($con,$qry) or die(mysqli_error($con));
$rows=mysqli_num_rows($run);
if($rows==0){
    header('location:index.php');
}*/
$q="UPDATE users_items SET users_items.status='Confirmed' where user_id='$uid' ";
$res=mysqli_query($con,$q) or die(mysqli_error($con));
?>
        <br><br><br><br>
        <div class='container-fluid success'>
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                    <div class='jumbotron bada'>Your order is confirmed. Thank you for shopping with us. ​<a href='product.php'>Click here​</a> to purchase any other item.
                     </div>
                </div>
            </div>
        </div>
       
       <br>
       <?php
       require 'footer.php';
       ?>
</body>
</html>