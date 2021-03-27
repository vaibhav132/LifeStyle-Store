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
        <div>
            <div id="banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands</p><br>
                            <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top: 50px; margin-bottom: 30px;">
                    <div class="col-xs-4">
                        <div class="thumbnail text-center">
                            <a href="products.php" >
                                <img src="img/1.jpg" alt="" class="thumbnail">
                                <div class="caption">
                                    <h2>Cameras</h2>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="thumbnail text-center">
                            <a href="products.php" >
                                <img src="img/7.jpg" alt="" class="thumbnail">
                                <div class="caption">
                                    <h2>Watches</h2>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="thumbnail text-center">
                            <a href="products.php" >
                                <img src="img/8.jpg" alt="" class="thumbnail">
                                <div class="caption">
                                    <h2>Shirts</h2>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
