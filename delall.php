<?php

$conn =mysqli_connect("localhost","root","","Al_Hassan");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare and execute the SQL delete statement
$DeleteAll =" truncate table Student ";
$result = mysqli_query($conn, $DeleteAll);
if($result == true ) {
    echo "   All Records  deleted successfully.";
} else {
    echo "Error deleting record ";
}
mysqli_close($conn);


?>
