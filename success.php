<?php
    require 'includes/common.php';
    if (!isset($_SESSION['email'])) 
    {
     header('location: index.php');
    }
    $all_items_ids = $_GET['itemsid'];
    $user_id = $_SESSION['user_id'];
    $update_query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $all_items_ids . ") and status='Added to cart'";
    $update_query_result = mysqli_query($con, $update_query) or die($mysqli_error($con));
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
        
        <div class="container-fluid">
            <div class="row row_style">
                <div class="col-md-12">
                    <div class="jumbotron">

                          <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                        <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/fixedFooter.php';
        ?>
    </body>
</html>

