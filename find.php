<?php
   
   $conn =mysqli_connect("localhost","root","","Al_Hassan");

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   
   // Get the ID from the form
   bindtextdomain("hh","hh");
    $Stu_id = $_POST['S_Id'];
   
   // Prepare and execute the SQL delete statement
   $find = " Select * from Student  Where S_id = '$Stu_id'";
   
   $result = mysqli_query($conn, $find);
   


?>