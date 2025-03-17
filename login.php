<?php
include("./connect.php");
include('./extrafunctions.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: grid;
            grid-template-columns: 1;
            justify-content: center;
            align-items: center;   
            margin-top:60px;
            height: 50vh;
        }

        .login-container {
            background-color: white;
            border-color: black;
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 0px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb0e5;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2982e8;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .forgot-password a {
            color: rgb(89, 132, 241);
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>ChefMart Login</h2>
        <p id="invalid"></p>
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <input type="submit" value="Login" name="login">
        </form>

        <div class="forgot-password">
            <a href="./forgot-password.php">Forgot your password?</a>

        </div>
       
    </div>
    <div class="login-container">
        Don't have an account? <a href="signup.php" style="text-decoration: none;color:#2982e8"><b>Sign Up</b> </a>
    </div>

</body>
</html>
<?php 
if(isset($_POST['login'])){
    $user_username=$_POST['username'];
    $user_password=$_POST['password'];
    $select_query="select * from `signup1` where username='$user_username'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();
    //cart item
    $select_query_cart="select * from `add_to_cart` where username='$user_username'";
    $select_cart=mysqli_query($conn,$select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);


    if($row_count>0){
        $_SESSION['username']=$user_username;
        if($user_password==$row_data['conf_password']){
            if($row_count==1 and $row_count_cart==0){
                $_SESSION['username']=$user_username;
            echo "<script>alert('Logged sucessfully')</script>";
            echo "<script>window.open('mainpage(1).php','_self')</script>";
          }
            else{
                $_SESSION['username']=$user_username;
                echo "<script>alert('Logged sucessfully')</script>";
                echo "<script>window.open('./mainpage(1).php','_self')</script>";
            }

        }else{
             echo "<script>document.getElementById('invalid').innerHTML='invalid Credential';</script>";
         }
    }
    else{
        echo "<script>document.getElementById('invalid').innerHTML='invalid Credentials';</script>";
    }
}
?>