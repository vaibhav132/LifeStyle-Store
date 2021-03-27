<?php
    require 'includes/common.php';
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
                    <table class="table table-striped">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $select_query = "SELECT items.price as P, items.id, items.name as N FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $select_query_result = mysqli_query($con, $select_query)or die($mysqli_error($con));
                        if (mysqli_num_rows($select_query_result) == 0) 
                        {
                         echo "<center><h2>Add items to the cart first!</h2></center>";
                        } 
                        else if(mysqli_num_rows($select_query_result) >= 1) 
                        {
                           ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($select_query_result)) 
                                {
                                    $sum+= $row["P"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["N"] . "</td>
                                              <td>Rs " . $row["P"] . "</td>
                                              <td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                      </tr>";
                                ?>
                            </tbody>
                            <?php
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include 'includes/fixedFooter.php';
        ?>
    </body>
</html>
