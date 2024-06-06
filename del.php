<?php

$conn =mysqli_connect("localhost","root","","Al_Hassan");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the form
$id = $_POST['Id'];

// Prepare and execute the SQL delete statement
$sql = "DELETE FROM Student WHERE Id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();

?>
