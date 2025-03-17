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
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label for="category_name" class="form-label">Category Name</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="category_name">
    </div>
    <div class="form-outline mb-4">
        <label for="user_image" class="form-label">Category Image</label>
        <input type="file" id="user_image" class="form-control"   name="category_image">
    </div>
    <div class="mt-4 pt-2">
        <input type="submit" value="Insert Category" class="bg-info py-2 px-3 border-0" name="insert_cat">
    </div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
include('./connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['category_name'];
    $user_image=$_FILES['category_image']['name'];
    $user_image_tmp=$_FILES['category_image']['tmp_name'];
    $select_query="Select * from `insert_category` where category_name='$category_title'";
    $result_select=mysqli_query($conn,$select_query);
    $number=mysqli_num_rows($result_select);
    
    if($number>0){
      echo "<script>alert('This is already present inside the database')</script>";
    } 
    else{
        move_uploaded_file($user_image_tmp,'./category_images/$user_image');
        $insert_query="insert into `insert_category` (category_image,category_name) values ('$user_image','$category_title')";
        $result=mysqli_query($conn,$insert_query);
        if($result){
            echo "<script>alert('Category has been inserted successfully')</script>";
          } 
    }
}

?>