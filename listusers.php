<?php
include('./connect.php');
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
<body style='background-color:lightgreen;';>
    <? echo "<h2 style='text-align:center'>Users name</h2>";
    $select_query="select * from `signup1`";
    $exec_query=mysqli_query($conn,$select_query);
    while($row=mysqli_fetch_array($exec_query)){
        $username=$row['username'];
        echo "<table border='1' style='margin-left:auto;margin-right:auto' padding='2'>
        <td>$username</td> 
        </table>";
   
    }
     ?>

</body>
</html>