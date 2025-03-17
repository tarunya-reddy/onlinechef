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
    <title>Japanese cuisines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: whitesmoke;
}

.container {
    width: 90%;
    max-width: 1200px;
    /* margin: 10px; */
    padding: 50px;
    margin-bottom: 20px;
    background-color: whitesmoke;
}

h1 {
    margin-top: 30px;
    margin-left: 30px;
    text-align: center;
    color: black;
    margin-bottom: 50px;
    text-decoration: solid;
}

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

    <body style="align-items: center;">
        
    <div class="header">
            
            <div>
               <a href="" class="text2"><h1 class="title">Chef4You</h1></a>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-5 ml-auto ">
                <p class="text"><a href="./cart.php" class="text1"> Cart</a></p>
                <p class="text">
                    <?php
     if(!isset($_SESSION['username'])){
       echo "
       <a  class='text1'  href='./login.php'>Login</a>";
     }
     else{
      echo "
      <a  class='text1' href='./logout.php'>Logout</a>";
     }
    ?>
               </p>
            </div>
        </div>
       
<?php
$show=$_SESSION['username'];
if($show){
  

include ('./connect.php');

$category_id = $_GET['category'];
$cum_id=$category_id;
$show_query = "select * from `chef` where chef_category='$category_id'";
$result = mysqli_query($conn, $show_query);
$count_products = mysqli_num_rows($result);
echo "<div class='container'>";
echo "<h1 style='color: black; font-size: 60px; font-weight: 500'>$category_id Cuisine Chefs</h1>";
while ($row_price = mysqli_fetch_array($result)) {
    $chef_id=$row_price['chef_id'];
    $chef_image = $row_price['chef_image'];
    $chef_name = $row_price['chef_name'];
    $expertise_in = $row_price['expertise_in'];
    $chef_price = $row_price['chef_price'];
    $chef_rating = $row_price['chef_rating'];
    $chef_category=$row_price['chef_category'];
    echo "           <div class='chef-card'>
                         <img src='$chef_image' >
                         <div class='chef-details'>
                             <h2>$chef_name</h2>
                             <p><strong>Expertise:</strong> $expertise_in</p>
                             <p><strong>Price Rate:</strong> ₹$chef_price/hour</p>
                             <p><strong>Rating:</strong> <span class='rating'>$chef_rating</span></p>
                             <a href='add_to_cart.php?chef=$chef_id' name='book_now'>Book Now</a>
                         </div>
                     </div>";}
                    
                    echo "</div>";}

     
else{
    
    echo "<script>window.open('./login.php','_self')</script>";
    
}
?>
        </body>
</html>
