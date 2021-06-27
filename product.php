<?php
require 'common.php';
require 'check_if_added.php';
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
        <br><br><br><br>
        <div class='container jumbotron jumbo'>
            <h1>Welcome to our lifestyle store!</h1><br>
            <p>We have the best camera, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-2 thumbnail'>
                    <img src='5.jpg'>
                    <div class='caption'>
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                         <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(1)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>

                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='2.jpg'>
                    <div class='caption'>
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(2)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='3.jpg'>
                    <div class='caption'>
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.50000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(3)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='4.jpg'>
                    <div class='caption'>
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs.80000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(4)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-2 thumbnail'>
                    <img src='12.jpg'>
                    <div class='caption'>
                        <h4>Faber Luba#111</h4>
                        <p>Price:Rs.18000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(5)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='9.jpg'>
                    <div class='caption'>
                        <h4>Titan Model#301</h4>
                        <p>Price:Rs.13000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(6)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='10.jpg'>
                    <div class='caption'>
                        <h4>Titan Model#201</h4>
                        <p>Price:Rs.3000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(7)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='11.jpg'>
                    <div class='caption'>
                        <h4>HMT Milan</h4>
                        <p>Price:Rs.8000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(8)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-2 thumbnail'>
                    <img src='6.jpg'>
                    <div class='caption'>
                        <h3>Luis Phil</h3>
                        <p>Price:Rs.1000.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(9)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='8.jpg'>
                    <div class='caption'>
                        <br>
                        <h3>H&W</h3>
                        <p>Price:Rs.800.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(10)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='13.jpg'>
                    <div class='caption'>
                        <h3>John Zok</h3>
                        <p>Price:Rs.1500.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(11)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
                <div class='col-xs-2 thumbnail'>
                    <img src='14.jpg'>
                    <div class='caption'>
                       
                        <h3>Jhalsani</h3>
                        <p>Price:Rs.1300.00</p>
                        <?php 
                          if (!isset($_SESSION['email'])) { 
                          ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                           } else {
                               if (check_if_added(12)) { 
                              echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                              } else {
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php
                              }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
       require 'footer.php';
       ?>
</body>
</html>