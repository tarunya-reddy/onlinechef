<?php
include("./connect.php");
include("./extrafunctions.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
            background-color: #2982e8;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1f90e6;
        }
        .text{
            color:green;
            text-align: center;
            font-size:19px;
            
            border-radius:3px;
            background: lightgreen;
        }
        .danger{
            color:red;
            text-align: center;
            font-size:19px;
            border-radius:3px;   
            background:rgba(255,0,0,0.2)
                }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>ChefMart Sign UP</h2>
        <p class="text"></p>
        <p class="danger"></p>
        <form action="" method="post">
           <input type="text" id="username" name="mobile_number" placeholder="Mobile Number" required>
            <input type="text" id="username" name="email" placeholder="Email" required>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="password" name="conf_password" placeholder="Confirm password" required>
            <input type="submit" name="signup" value="Sign Up" style="font-weight: bold;">
        </form>
    </div>
    <div class="login-container">
        Don't have an account? <a href="./login.php" style="text-decoration: none;color:#2982e8"><b>Sign Up</b> </a>
    </div>
</body>
</html>
<?php
 global $conn;
 if(isset($_POST['signup'])){

    $user_mobile_number=$_POST['mobile_number'];
    $user_email=$_POST['email'];
    $user_username=$_POST['username'];
    $user_password=$_POST['password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_password'];
    $user_ip=getIPAddress();  
    
    $select_query="select * from `signup1` where username='$user_username' or password='$user_password'";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>part=document.getElementsByClassName('danger');
        part[0].innerHTML='Username or password is already exist';
        </script>";
    }
    else if($user_password!=$conf_user_password){
        echo "<script>part=document.getElementsByClassName('danger');
        part[0].innerHTML='Passwords not matched';
        </script>";
    }
    else{
    $insert_query="insert into `signup1`(phone_number,email,username,password,conf_password)values('$user_mobile_number','$user_email','$user_username','$hash_password','$conf_user_password')";
    $register_connection=mysqli_query($conn,$insert_query);
    if($register_connection){
        echo "<script>part=document.getElementsByClassName('text');
            part[0].innerHTML='Data inserted sucessfully'</script>";
    }}}
?>