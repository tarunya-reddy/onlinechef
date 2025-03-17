
<?php
include('./connect.php');
$select_category="select * from `insert_category`";
$exec_category=mysqli_query($conn,$select_category);
$count=0;
echo "<h2 style='text-align:center'>List of Categories</h2>";
while($row=mysqli_fetch_assoc($exec_category)){
   $category_id=$row['category_id'];
   $category_image=$row['category_image'];
   $category_title=$row['category_name'];

echo "
 <table border='1' border-padding='3' style='margin-left:auto; margin-right:auto'>
 <tr>
  <td style='width:50px;text-align:center;'>$category_id</td>
  <td ><img src='./category_images/$category_image' height='100px' width='200px'/></td>
  <td style='width:80px; text-align:center;'>$category_title</td>
 </tr>
 </table>
";}
?>