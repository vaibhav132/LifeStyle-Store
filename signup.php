<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
{
 header('location: products.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Welcome | Lifestyle Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="true" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <?php
                                if(isset($_GET["m1"]))
                                {
                                  echo $_GET['m1'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Contact" name="contact" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/fixedFooter.php';
        ?>
    </body>
</html>
