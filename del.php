<?php

$conn =mysqli_connect("localhost","root","","Al_Hassan");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the form
$id = $_POST['Id'];

// Prepare and execute the SQL delete statement
$Delete = "DELETE FROM Student WHERE Id = '$id'";
$result = mysqli_query($conn, $Delete);
if($result == true ) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record ";
}
mysqli_close($conn);


?>
