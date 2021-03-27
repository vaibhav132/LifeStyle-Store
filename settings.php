<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
{
header('location: index.php');
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
                    <h2>Change Password</h2>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="old" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="new" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="repeat" required>
                        </div>
                        <button type="button" class="btn btn-primary" value="Change">Change</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/fixedFooter.php';
        ?>
    </body>
</html>
