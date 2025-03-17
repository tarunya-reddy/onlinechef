<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awewsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container-fluid">
<h2 class="text-center">INSERT CATEGORY</h2>
<div class="row d-flex align-items-center justify-content-center">
<div class="lg-12 col-xl-6">
<form action="" method="post" >
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Chef Image</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="chef_image">
    </div>
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Chef Name</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="chef_name">
    </div>
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Expertise in</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="expertise_in">
    </div>
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Chef Price</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="chef_price">
    </div>
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Chef Rating</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="chef_rating">
    </div>
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Chef Category</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="chef_category">
    </div>
    <div class="mt-4 pt-2">
        <input type="submit" value="Insert Chef" class="bg-info py-2 px-3 border-0" name="insert_chef">
    </div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['insert_chef'])){
    $chef_image=$_POST['chef_image'];
    $chef_name=$_POST['chef_name'];
    $expertise_in=$_POST['expertise_in'];
    $chef_price=$_POST['chef_price'];
    $chef_rating=$_POST['chef_rating'];
    $chef_category=$_POST['chef_category'];
    $insert_query="insert into `chef` (chef_image,chef_name,expertise_in,chef_price,chef_rating,chef_category) values ('$chef_image','$chef_name','$expertise_in','$chef_price','$chef_rating','$chef_category')";
    $result=mysqli_query($conn,$insert_query);
    if($result){
            echo "<script>alert('Chef has been inserted successfully')</script>";}
      
}

?>
