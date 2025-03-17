<?php
include('./extrafunctions.php');
include("./connect.php");
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cart</title>
           
    <style>
            
         <?php 
         include('./all.css');
         ?>  
 
        </style>
        <script>
            function menubar(){
                menulist=document.getElementById("menu-list");
                menulist.classList.toggle("open")
            }
        </script>
    </head>

    <body>
        


    <div class="header">
            
            <div>
               <a href="" class="text2"><h1 class="title">Chef4You</h1></a>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-5 ml-auto mr-20">
                    <?php
     if(!isset($_SESSION['username'])){
       echo "
       <p class='text'><a  class='text1'  href='./login.php'>Login</a></p>";
     }
     else{
      echo "
      <p class='text' ><a  class='text1' href='./logout.php'>Logout</a></p>";
     }
    ?>
                
            </div>
            <div class="item" id="menu">
                <button id="menubar" onclick="menubar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                  
                </button>
            </div>
            <div id="menu-list">
                <div class="align" >
                <?php
     if(!isset($_SESSION['username'])){
       echo "
       <p class='text'><a  class='text1'  href='./login.php'>Login</a></p>";
     }
     else{
      echo "
      <p class='text' ><a  class='text1' href='./logout.php'>Logout</a></p>";
     }
    ?>
             
    </div>
            </div>
        </div>



<div class="container ">
    <h1 style="text-align: center; color:red; margin-top:80px;">CART DETAILS</h1>
    <div class="row">
      <form method="post" action="">
        <table class="table table-bordered ">
            
                <?php 
                global $conn;
                $username=$_SESSION['username'];
                $total_price=0;
                $total_price2=1;
                $count=0;
                $cart_query="select * from `add_to_cart` where  username='$username' and status=0";
                $result=mysqli_query($conn,$cart_query);
                $result_count=mysqli_num_rows($result);
                if($result_count>0){
                echo "<thead>
                <tr>
                    <th>Chef Name</th>
                    <th>Chef Image</th>
                    <th>Chef Price</th>
                    <th>Quatity</th>
                    <th></th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>";
            while($row=mysqli_fetch_array($result)){
                $product_id=$row['chef_id'];
                $select_products="Select * from `chef` where chef_id=$product_id";
                $result_products=mysqli_query($conn,$select_products);
                $select_products2="Select * from `add_to_cart` where chef_id=$product_id ";
                $result_products2=mysqli_query($conn,$select_products2);
                $row3=mysqli_fetch_assoc($result_products2);
             
                while($row_product_price=mysqli_fetch_array($result_products)){
                  $product_price2=$row_product_price['chef_price'];
                  $product_price=array($row_product_price['chef_price']);
                  $price_table=$row_product_price['chef_price'];
                  $product_title=$row_product_price['chef_name'];
                  $product_image=$row_product_price['chef_image'];
                  $product_id=$row_product_price['chef_id'];
                  $chef_category=$row_product_price['chef_category'];
                  $product_values=array_sum($product_price);
                  
                ?>
              <tr>
                  <td><?php echo $product_title;?></td>
                  <td ><?php echo "<img src=$product_image height='60px' widhth='60px'/>"?></td>
                  <td><?php echo $product_price2 ?></td>
                  <?php 
                  //  $insert_query="insert into `cart` (chef_image,chef_name,chef_category,quantity,
                  //  chef_price,ip_address,total,total_price,subtotal) values('$product_image','$product_title',
                  //  '$chef_category',0,$product_price2,'$get_ip_add',0,0,0)";
                  //  $select_query=mysqli_query($conn,$insert_query);
                    ?>
                  <td><input type="text" name="quantit" id="quantity" class="form-input" value="1"/></td>  
                  <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></td>
                  
                    <td>
                      <!-- <button class="bg-info border-0 px-3 py-2 mx-3 text-light">Remove</button> -->
                    <input type="submit" class="bg-info border-0 px-3 py-2 mx-3 text-light" name="remove_cart" value="remove cart">
                  </td>
                  <?php
                  
                  $total_price=$total_price+$product_price2;
                  ?>
                </td>
             
              </tr>
           	
              <?php    }}}                   
                
                 
                else{
                  echo "<h2 class='text-center text-danger'>cart is empty</h2>";
                }?>
            </tbody>
        </table>
     
    
        <div class="col-md-12">
        <h2 style="color:red;">Cart Totals</h2>
        <hr/>
        <h4>Subtotal : <?php echo $total_price ; ?></h4>
        <hr/>
        <h4>Delivery Fee : 40/-</h4>
        <hr/>
        <h2>Total : <?php echo $total_price+40; ?></h2>
        <hr/>
        </div>
        
        <div class="path">
        <?php
        echo "<button class='bg-info px-3 border-0 px-3 py-2 mx-2 text-light'><a href='./mainpage(1).php' style='text-decoration: none;'> move to main page </a> </button>
        
        <button class='bg-info px-3 border-0 px-3 py-2 mx-2 text-light'><a href='./address.php' style='text-decoration: none;'>checkout</a></button>";
        ?>
        
        </div>
        
      </form>
      <?php 
 function remove_cart_item(){
  global $conn;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_query="delete from `add_to_cart` where chef_id=$remove_id";
      $run_delete=mysqli_query($conn,$delete_query);
      if($run_delete){
        echo "<script>window.open('cart.php'.'_self')</script>";
      }

    }
  }
 }
 echo $remove_item=remove_cart_item();
 ?>

    </div>
    
 </div>
 <div id="About" style="background-color: black;">
            <div class="cont">
                <div class="co">
                    <h1>About Us</h1>
                    <p class="text4">
                        Chef4U is a culinary service dedicated to delivering personalized chef experiences right to your doorstep. Our skilled chefs create customized menus tailored to your tastes, using fresh, locally sourced ingredients to craft exquisite meals for any occasion. Whether it's a private dinner, family gathering, or special celebration, Chef4U brings the art of fine dining to the comfort of your home, making every meal memorable and hassle-free. Enjoy gourmet, chef-curated meals with a focus on flavor, quality, and convenience, designed just for you.
                    </p>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">
                <div class="bott">
                    <h2>Services</h2><br>
                    <div class="botto">
                        <h6 class="text2">Cook And Chef Service</h6>
                        <h6 class="text2">Cuisines</h6>
                        <h6 class="text2">Customer Reviews</h6>
                        <h6 class="text2">Top Rated Chefs</h6>
                    </div>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">  
                <div class="bott">
                    <h2>Serving In</h2><br>
                    <div class="botto">
                        <h6 class="text2">Ongole</h6>
                        <h6 class="text2">Vijayawada</h6>
                        <h6 class="text2">Guntur</h6>
                        <h6 class="text2">Hyderabad</h6>
                        <h6 class="text2">Warangal</h6>
                        <h6 class="text2">Khammam</h6>
                    </div>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <div class="cont">  
                <div class="bott">
                    <h2>Connect With us</h2><br>
                    <div class="botto">
                        <h6 class="text2">6309071960</h6>
                        <h6 class="text2">Incredible@gmail.com</h6>
                        <h6 class="text2">Ongole,Prakasham</h6>
                        
                    </div>
                </div>
            </div>
            <div class="co">
                <div class="botto">
                <a href=""><img src="./category_images/fb.svg" class="logo"></a>
                <a href=""><img src="./category_images/insta.svg" class="logo"></a>
                <a href=""><img src="./category_images/in.svg" class="logo"></a>
                <a href=""><img src="./category_images/x.jpg" class="logo"></a>
                <a href=""><img src="./category_images/Utube.svg" class="logo"></a>
                </div>
            </div>
            <hr style="margin-left: 60px;margin-right: 60px;">
            <p class="text2" style="text-align: center;margin-bottom: 0px;">Copyright 2025 Chef4U.com-All Rights Reserved</p>
        </div> 
</body>
</html>