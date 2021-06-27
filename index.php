<?php
require 'common.php';
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
        if(isset($_SESSION['email'])){
            header('location:product.php');
        }
        ?>
        <?php
         require 'header.php';
         ?>
        <div class='image'>
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3 inner'>
                       <h1>We sell lifestyle.</h1>
                       <p>Flat 40% OFF on premium brands</p>
                       <a href='product.php'><button type='Shop Now' class='btn btn-danger'>Shop Now</button></a>
                </div>
            </div>  
           
        </div>
       <?php
       require 'footer.php';
       ?>
</body>
</html>