<?php
include('./connect.php');
include('./extrafunctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awewsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../main.css">

    <style>
.logo{
    width:5%;
    height:5%;
}
.admin_image{
    width:150px;
    object-fit: contain;

}
img{
    object-fit: contain;
    height:50px;
    width:50px;
}
body{
    overflow-x:hidden;
}

    </style>
</head>
<body>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../images/1.png" alt="" class="logo">
            <nav class="navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a> 
                    </li>
                </ul>
            </nav>
        </div>

      </nav>
    </div>


    <div class="bg-light">
        <h3 class="text-center p-2">Admin Panel</h3>
    </div>

    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="px-5">
                <a href="#"><img src="../images/1.webp" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
            <button><a href="./insert_chef.php" class="nav-link text-light bg-info my-1">Insert Chef</a></button>
    <button><a href="./view_chef.php" class="nav-link text-light bg-info my-1">View Chefs</a></button>
    <button><a href="./add_category.php" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
    <button><a href="./view_category.php" class="nav-link text-light bg-info my-1">View Categories</a></button>
    <button><a href="./vieworders.php" class="nav-link text-light bg-info my-1">All Orders</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
    <button><a href="./listusers.php" class="nav-link text-light bg-info my-1">List Users</a></button>
    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>
    </div>
  
 

     <!-- bootstrap js link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
