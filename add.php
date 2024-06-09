<?php
//Create connection
 include 'connect.php';
// Get data from form submission
$id     =   $_POST['Id'];
$Stu_id     =   $_POST['S_Id'];
$fname   =   $_POST['fname'];
$lname =    $_POST['lname'];
$fathername  =   $_POST['FatherName'];
$father_contact =   $_POST['Father_Number'];
$Address =   $_POST['address'];
$date  =   $_POST['D_O_B'];
$Class =    $_POST['Class'];
$Section =    $_POST['Sec'];
$Email =   $_POST['Email'];

// Prepare and execute SQL statement to insert data
 $sql = " insert into Student values ('$id','$Stu_id','$fname','$lname','$fathername','$father_contact','$Address','$date','$Class','$Section','$Email')";
 // $select= "select * from student";
$result = mysqli_query($conn,$sql);
 // Set Condition
if  ($result == true){
    echo "The Data Entered Successfully";
}
 else {
    echo "Connection Failed";
 }

