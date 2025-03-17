<?php 
include("./connect.php");
include('./extrafunctions.php');
@session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Body Styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
           /* background: linear-gradient(5deg, #bdc613, #4b4b4a);*/
           background-color: whitesmoke;
        }

        /* Profile Card Styling */
        .profile-card {
            background: #fff;
            width: 350px;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        /* Profile Initial Styling */
        .profile-initial {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: gray;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
            margin: 0 auto 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading and Field Labels */
        h2 {
            color: #333;
            font-size: 26px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .field-label {
            color: #777;
            font-size: 14px;
            margin-top: 20px;
            font-weight: bold;
            text-align: left;
        }

        /* Field Content Styling */
        .field-content, .field-input {
            color: #555;
            font-size: 15px;
            margin-top: 8px;
            background-color: #f3f4f6;
            padding: 10px 15px;
            border-radius: 12px;
            width: 100%;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            border: none;
            outline: none;
            text-align: center;
        }

        /* Button Styling */
        .contact-button, .save-button, .orders-button {
            padding: 12px 25px;
            background: gray;
            border: none;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .contact-button:hover, .save-button:hover, .orders-button:hover {
            background: #ffc3a0;
        }

        /* Flex container for buttons */
        .button-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 25px;
        }

        /* Form Styling */
        .profile-form {
            display: flex;
            flex-direction: column;
            align-items: left;
            gap: 15px;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <!-- Profile Initial instead of image -->
        <div class="profile-initial" id="profile-initial">L</div>
        <?php
          $username1=$_SESSION['username'];
          $query="select * from `signup1` where username='$username1'";
          $row=mysqli_query($conn,$query);
          $rows=mysqli_fetch_assoc($row);
          $email=$rows['email'];
          $username=$rows['username'];
          $query1="select * from `address` where username='$username1'";
          $row1=mysqli_query($conn,$query1);
          $rows1=mysqli_fetch_assoc($row1);
          $address=$rows1['address'];
        ?>
        <div class="field-label" >Username</div>
        <div class="field-content" id="username-field"><?php echo $username;?></div>

        <form class="profile-form" method="post" action="">

            <div class="field-label">email</div>
            <input type="text" class="field-input" value="<?php echo $email ?>"  name='email'/>
            <div class="field-label">Address</div>
            <input type="text" class="field-input" value="<?php echo $address ?>"  name='address'/>
            
    
            <!-- Button Container for View Orders and Save Changes -->
            <div class="button-container">
                <a href="./myorders.php" class="orders-button">View Orders History</a>
                <input type="submit" class="save-button" name='save' value='Save Changes'>
            </div>
        </form>
        <?php
              if(isset($_POST['save'])){
              $user_email=$_POST['email'];
              $query1="update `signup1` set email='$user_email' where username='$username1'";
              $rows1=mysqli_query($conn,$query1);
              $user_address=$_POST['address'];
              $query1="update `address` set address='$user_address' where username='$username1'";
              $rows2=mysqli_query($conn,$query1);
              if($rows1 && $rows2){
                echo "<script>alert('data updated sucessfully');</script>";
              }
            }
              
        ?>
    </div>
    <script>
        // Function to set the initial of the username dynamically
        function setProfileInitial() {
            const username = document.getElementById('username-field').textContent;
            const profileInitial = document.getElementById('profile-initial');
            if (username) {
                profileInitial.textContent = username.charAt(0).toUpperCase();
            }
        }

        // Call the function to set the initial when the page loads
        window.onload = setProfileInitial;
    </script>
</body>
</html>
