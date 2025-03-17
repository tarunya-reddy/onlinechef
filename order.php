<?php 
include("./connect.php");
include('./extrafunctions.php');
@session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="./order.css">
</head>
<body>
    <div class="container">
        <div class="thank-you-message">
            <h1>Thank You for Your Order!</h1>
            <p>Your order has been successfully placed ..!</p>
            <div class="order-summary">
                <h2>Order Summary</h2>
                <?php
                $total_price=0;
                $username=$_SESSION['username'];
                echo $username;
                $query="select * from `items` where username='$username' and status=0";
                $row=mysqli_query($conn,$query);
                $rows=mysqli_fetch_assoc($row);
                $order_id=$rows['order_id']; 
                echo $order_id;            
                $items=$rows['item_list'];
                $query2="select * from `add_to_cart` where username='$username' and status=0";
                $row1=mysqli_query($conn,$query2);
                while($rows1=mysqli_fetch_array($row1)){
                      $price=$rows1['chef_price'];
                      $total_price=$total_price+$price;}  
                ?>
                <p><strong>Order Number:</strong><?php echo $order_id; ?></p>
                <p><strong>Items:</strong> <?php echo $items; ?></p>
                <p><strong>Total Amount:</strong><?php echo $total_price+40;?></p>
                <p><strong>Status:</strong> Preparing for Delivery</p>
                <?php
                 $insert_query2="insert into `orders` (username,order_number,Items,total_amount,status)values('$username','$order_id','$items','$total_price','booked')";	
                 $update_query=mysqli_query($conn,$insert_query2);
                ?>
                <?php
                 $query3="update `items` set status=1 where username='$username' and status=0";
                 $row2=mysqli_query($conn,$query3);
                 $query4="update `add_to_cart` set status=1 where username='$username' and status=0";
                 $row3=mysqli_query($conn,$query4);
                ?>
            </div>
            <a href="./mainpage(1).php" class="home-button" target="_blank">Back to Home</a>
        </div>
    </div>
</body>
</html>
