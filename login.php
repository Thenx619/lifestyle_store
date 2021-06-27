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
         require 'header.php';
         ?>
        <div class='container-fluid'>
           <div class='row'>
               <div class='col-xs-6 col-xs-offset-3'>
                <div class='panel panel-primary login'>
                    <div class='panel-heading'>
                        <h1>LOGIN</h1>
                    </div>
                    <div class='panel-body'>
                        Login to make a purchase<br><br>
                        <form method='POST' action='login_submit.php'>
                            <div class='form-group'>
                                <input type='email' class='form-control' name='email' placeholder='email'>
                            </div>
                            <div class='form-group'>
                                <input type='password' class='form-control' name='password' placeholder='password'>
                                <div>
                                <?php
                                   if(isset($_GET['info_error']))
                                  echo $_GET['info_error'];
                                
                                ?>
                                </div>
                            </div>
                            
                            <div class='form-group'>
                                <button type='Submit' value='Login' class='btn btn-primary'>login</button>
                            </div>
                        </form>
                    </div>
                    <div class='panel-footer'>
                        Don't have an account? <a href='signup.php'>Register</a>
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