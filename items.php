<?php 
include("./connect.php");
include('./extrafunctions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        } */
        .container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
            text-align: center;
        }

        form .form-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px; /* More space between groups */
        }

        form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .save-changes {
            width: 100%;
            padding: 10px;
            color: #fff;
            background-color: teal;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
        }

        .save-changes:hover {
            background-color: #006d6d;
        }
        button {
            margin-top:30px !important;
            margin-left:160px !important;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border:0px;
            color:blue;
        }
    </style>
</head>
<body> 

<div class="container">
    <div class="content">
        <div class="delivery-info">
            <h2>Dishes Info</h2>
            <form action="" method="post">
                <!-- First name and Last name fields -->
                <div class="form-group">
                    <input type="text" placeholder="username" name='username'>
                </div>
                <p style="color:rebeccapurple;">Enter your items which we have to cook in preferred location.But item list should be 
                    related to selected cuisines in the below filed.
                </p>
                <!-- Email address field -->
                <div class="form-floating">
                  <textarea class="form-control" name='itemlist' placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2"></label>
                </div>

                <!-- Save Changes button -->
                <input type="submit" value="save Changes" name='items' class="save-changes"/>           
            </form> 
            <button onclick="openPopup()">Place Your Order</button>

<script>
    function openPopup() {
        const width = 400;
        const height = 500;
        const left = (window.innerWidth / 2) - (width / 2);
        const top = (window.innerHeight / 2) - (height / 2);

        window.open(
            'order.php', // URL to open in pop-up
            'Order Placed', // Name of the window
            `width=${width},height=${height},top=${top},left=${left}` // Window dimensions and position
        );
    }
</script>
        </div>
    </div>
</div>

<?php
 if(isset($_POST['items'])){

    $user_email=$_POST['username'];
    $user_items_list=$_POST['itemlist'];
    $select_query="insert into `items`(username,item_list,status) values('$user_email','$user_items_list',0)";
    $result=mysqli_query($conn,$select_query);
    if($result){
        echo "<script>alert('data added sucessfully')</script>";
    }
    }
?>