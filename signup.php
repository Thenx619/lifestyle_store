<?php
require 'common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
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
         ?>
        <div class='container-fluid'>
           <div class='row'>
               <div class='col-xs-6 col-xs-offset-3'>
                <div class='panel panel-primary signup'>
                    <div class='panel-heading'>
                        <h1>SIGN UP</h1>
                    </div>
                    <div class='panel-body'>
                       
                        <form method='POST' action='signup_script.php'>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='name' placeholder='Name' pattern="[a-zA-Z\s]+">
                            </div>
                            <div class='form-group'>
                                <input type='email' class='form-control' name='email' placeholder='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <div>
                                    <?php
                                    if(isset($_GET['error']))
                                    echo $_GET['error'];
                                    ?>
                                </div>
                            </div>
                            <div class='form-group'>
                                <input type='password' class='form-control' name='password' placeholder='password' pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                            </div>
                            <div class='form-group'>
                                <input type='number' class='form-control' name='contact' placeholder='Contact' pattern="[0-9]{10}">
                            </div>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='city' placeholder='City' pattern="[a-zA-Z\s]+">
                            </div>
                            <div class='form-group'>
                                <input type='text' class='form-control' name='address' placeholder='Address'>
                            </div>
                            <div class='form-group'>
                            <button type='Submit' value='Signup' class='btn btn-primary'>Signup</button>
                            </div>
                        </form>
                    </div>
                   
                </div>
               </div>
           </div>
        </div>
       
        <?php
  require 'footer.php';
  ?>
</body>
</html>