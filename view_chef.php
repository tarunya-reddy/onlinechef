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
    background-color: teal;
}

.container {
    width: 90%;
    max-width: 1200px;
    /* margin: 10px; */
    padding: 50px;
    margin-bottom: 20px;
    background-color: teal;
}

h1 {
    margin-top: 30px;
    margin-left: 30px;
    text-align: center;
    color: #0c0c0c;
    margin-bottom: 50px;
    text-decoration: solid;
}

.chef-card {
    background: #fff;
    margin: 20px;
    padding: 20px;
    border-radius: 18px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    border: 3.5px solid black;
    /* margin-bottom: 30px; */
}
.chef-card:hover{
    transform: scale(1.05);
}
.chef-card img {
    width: 150px;
    height: 150px;
    /* border-radius: 50%; */
    margin-right: 20px;
    margin-left: 50px;
    object-fit: cover;
}

.chef-details {
    flex: 1;
    margin-left: 50px;
}

.chef-card h2 {
    margin: 0;
    color: #333;
}

.chef-card p {
    margin: 5px 0;
    color: #666;
}

.rating {
    color: #ff9800;
}

.book-now {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 10px;
    cursor: pointer;
    text-align: center;
    border: none;
    margin-top: 10px;
    /* margin-left: 175px; */

}

.book-now:hover {
    background-color: #45a049;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .chef-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .chef-card img {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .book-now {
        width: 100%;
        text-align: center;
    }
}

    </style>
</head>
<body style="background-color: teal;">
    <div class="container">
<?php
include ('./connect.php');
$show_query = "select * from `chef` ";
$result = mysqli_query($conn, $show_query);
$count_products = mysqli_num_rows($result);
echo "<h1 style='color: rgb(234, 226, 223); font-size: 60px; font-weight: 500'>All Cuisine Chefs</h1>";
while ($row_price = mysqli_fetch_array($result)) {
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
                             <p><strong>category:</strong>$chef_category</p>
                             <a href='book-liwei.html' class='book-now'>Book Now</a>
                         </div>
                     </div>";
}


?>
        </body>
</html>