<?php
require 'common.php';
if(!isset($_SESSION['id'])){
    header('location:index.php');
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
        <style>
            h4{
                font-family: sans-serif;
            font-size: larger;
            font-weight: bold;
            }
            
        </style>
    </head>
    <body>
        <?php
        require 'header.php';
        ?>
        <br><br><br><br>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-xs-6 col-xs-offset-3'>
                 <div class='panel panel-primary settings'>
                     
                     <div class='panel-body'>
                         <h4>Change Password</h4><br>
                         <form method="POST" action="settings_script.php">
                             
                             <div class='form-group'>
                                 <input type='password' class='form-control' name='old_password' placeholder='Old password'>
                                 
                             </div>
                             <div class='form-group'>
                                <input type='password' class='form-control' name='new_password' placeholder='New password'>
                            </div>
                            <div class='form-group'>
                                <input type='password' class='form-control' name='re_password' placeholder='Re-type New password'>
                                <div>
                                <?php
                                
                                   if(isset($_GET['password_error']))
                                  echo $_GET['password_error'];
                                  if(isset($_GET['pass_error']))
                                  echo $_GET['pass_error'];
                                ?>
                                </div>
                            </div>
                             <div class='form-group'>
                                 <button type='Change' value='Change' class='btn btn-primary'>Change</button>
                                 <div>
                                 <?php
                                 if(isset($_GET['success']))
                                  echo $_GET['success'];
                                  ?>
                                 </div>
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