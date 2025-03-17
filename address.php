<?php 
include("./connect.php"); 
?>
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
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="delivery-info">
            <h2>Address Info</h2>
            <form action="" method="post" >
                <!-- First name and Last name fields -->
                <div class="form-group">
                    <input type="text" placeholder="First name" name='firstname'>
                    <input type="text" placeholder="Last name" name='lastname'>
                </div>

                <!-- Email address field -->
                <div class="form-group">
                    <input type="text" placeholder="Username" name='username'>
                </div>

                <div class="form-group">
                  <input type="text" name='user_address' placeholder="address" style="height: 200px" >
                
                </div>

                <!-- Save Changes button -->
                <input type="submit" value="save Changes" name='address' class="save-changes"/>   
            </form> 
        </div>
    </div>
</div>
<?php
 if(isset($_POST['address'])){

    $user_firstname=$_POST['firstname'];
    $user_lastname=$_POST['lastname'];
    $user_username=$_POST['username'];
    $user_address=$_POST['user_address'];
   
    
    $select_query="insert into `address`(first_name,last_name,username,address) values('$user_firstname','$user_lastname','$user_username','$user_address')";
    $result=mysqli_query($conn,$select_query);
    if($result){
        echo "<script>alert('data added sucessfully')</script>";
        echo "<script>window.open('./items.php','_self')</script>";
    }
    }
?>
</body>
</html>
