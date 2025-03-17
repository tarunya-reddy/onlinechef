<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .search-bar-container {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap on smaller screens */
            margin-bottom: 20px;
        }

        .search-bar {
            flex: 1;
            min-width: 200px; /* Ensure a minimum width for the search bar */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 10px 20px;
            background-color: teal;
            color: #fff;
            border: none;
            border-radius: 4px;
            margin-left: 10px;
            cursor: pointer;
            flex-shrink: 0; /* Prevent shrinking */
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        /* Order Item */
        .order-item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
        }

        .chef-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }

        .order-details {
            flex: 1;
        }

        .order-details h4 {
            margin: 0;
            color: #333;
            font-size: 1.1em;
        }

        .order-details p {
            margin: 5px 0;
            color: #555;
        }

        .action-link:hover {
            text-decoration: underline;
        }

        /* No More Results Button */
        .no-more-results {
            width: 100%;
            padding: 10px;
            background-color: #e0e0e0;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: not-allowed;
            color: #555;
            font-weight: bold;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .search-bar-container {
                flex-direction: column; /* Stack search bar and button on smaller screens */
            }

            .search-button {
                margin-left: 0; /* Remove left margin on small screens */
                margin-top: 10px; /* Add top margin for spacing */
            }

            .order-item {
                flex-direction: column; /* Stack items vertically */
                align-items: flex-start; /* Align items to start */
            }

            .chef-image {
                margin-bottom: 10px; /* Add space below image */
            }
        }
</style>
</head>
<body>
    
<?php
include('./connect.php');
$select_category="select * from `orders`";
$exec_category=mysqli_query($conn,$select_category);
$count=0;
echo "<h2 style='text-align:center'>List of Orders</h2>";
while($row=mysqli_fetch_assoc($exec_category)){
   $username=$row['username'];
   $order_id=$row['order_number'];
   $order_items=$row['Items'];
   $amount=$row['total_amount'];
   $status=$row['status'];

echo "
<div class='order-item'>
            <div class='order-details'>
                <h4>Order_id:$order_id</h4>
                <p>Username:$username</p>
                <p>Order_items:$order_items</p>
                <p>Order_amount:$amount</p>
                <p>Order_status:$status</p>
            </div>
</div>
";}
?>
</body>
</html>