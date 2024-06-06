<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete Form Page</title>
</head>
<body>
<?php 
    include 'navbar.php';
    
    ?>
   
    <form action="del.php" id="Del_form" method="post">
   
         <h2>Delete</h2>
         <label for="">Seriel No:</label>
         <input type="number" placeholder="Seriel No:" name="Id"> <br><br>
         <button type="submit" id="del_btn">Delete</button>
    </form>
</body>
</html>

