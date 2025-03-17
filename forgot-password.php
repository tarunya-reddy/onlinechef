<?php
include("./connect.php");
include('./extrafunctions.php');
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
        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter  password" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="conf_password" placeholder="Re-enter password" required>

            <input type="submit" value="reset password" name="submit">
        </form>

        <div class="forgot-password">
            <p>Back to <a href="./login.php">Login?</a></p>

        </div>
       
    </div>

</body>
</html>
<?php
global $conn;
if(isset($_POST['submit'])){
   $user_email=$_POST['email'];
   $user_password=$_POST['password'];
   $user_conf_password=$_POST['conf_password'];
   $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
   $select_query="update `signup1` set password='$hash_password',conf_password='$user_conf_password' where email='$user_email'";
   $result=mysqli_query($conn,$select_query);

}
?>