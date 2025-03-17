<?php
include('./extrafunctions.php');
include('./connect.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php

 $chef_id=$_GET['chef'];
 $username=$_SESSION['username'];
 $insert_query="select * from `chef` where chef_id=$chef_id ";
 $exec_category=mysqli_query($conn,$insert_query);
 $error="select * from `add_to_cart` where chef_id=$chef_id and username='$username' and status=0";
 $exec2=mysqli_query($conn,$error);
 $rows=mysqli_num_rows($exec2);
 if($rows==1){
    $row=mysqli_fetch_assoc($exec_category);
    $chef_name=$row['chef_name'];
    $chef_image=$row['chef_image'];
    $chef_price=$row['chef_price'];
    $category=$row['chef_category'];
    echo $category;
    echo "<script>alert('chef is already present in the cart')</script>";
    echo "<script>window.open('./chef.php?category=$category','_self')</script>";
 }
 else{
 $row=mysqli_fetch_assoc($exec_category);
 $chef_name=$row['chef_name'];
 $chef_image=$row['chef_image'];
 $chef_price=$row['chef_price'];
 $category=$row['chef_category'];
 echo $category;
 
 $insert_query="insert into `add_to_cart`(username,chef_id,chef_name,chef_image,chef_price,category,status)values('$username',$chef_id,'$chef_name','$chef_image','$chef_price','$category',0)";
 $exec_query=mysqli_query($conn,$insert_query);
 if($exec_query){
     echo "<script>alert('data is inserted sucessfully')</script>";
     echo "<script>window.open('./chef.php?category=$category','_self')</script>";}
 }
 
?>
</body>
</html>