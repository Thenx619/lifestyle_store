<html>
    <head>
        <title>header</title>
    </head>
 <body>

<div class='navbar navbar-inverse navbar-fixed-top'>
            <div class='container'>
                <div class='navbar-header'>
                    <a href='index.php' class='navbar-brand'>Lifestyle Store</a>
                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#mybar'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>
                     
                <div class='collapse navbar-collapse' id='mybar'>
                    <ul class='nav navbar-nav navbar-right'>
                    <?php 
                      if(isset($_SESSION['email'])){
                    ?>
                      <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span>Cart</a></li>
                        <li><a href='settings.php'><span class='glyphicon glyphicon-wrench'></span>Settings</a></li>
                        <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>

                        <?php
                      } else {
                         ?> 
                        <li><a href='signup.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>
                        <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Log In</a></li>
                         <?php
                      } ?>
                    </ul>
                </div>

            </div>
        </div>
</body>
</html>     