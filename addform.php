<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Form</title>
</head>
<body>
        <?PHP
        include 'navbar.php'
        ?> 
    <form action="add.php" method="post" class="form">
      
            <h2>Al Hassan Academy</h2>
            <h3>Students Data Entry  Form</h3>
            <label for=""> Seriel No  </label><br>
        <input type="number" placeholder="XX" name="Id">  <br><br> 
        <label for=""> Student Id </label><br>
        <input type="number" placeholder="XXXXXXX" name="S_Id">  <br><br>                 
        <label for="">First Name</label><br>
        <input type="text" placeholder="First Name" name="fname"><br><br> 
        <label for="">Last Name</label><br>
        <input type="text" placeholder="last Name" name="lname"><br><br> 
        <label for="">Father's Name</label><br>
        <input type="text" placeholder="father's Name" name="FatherName"><br><br> 
        <label for="">Father's Number</label><br>
        <input type="text" placeholder="father's Name" name="Father_Number"><br><br> 
        <label for="">Date of Birth</label><br>
        <input type="date" name="D_O_B"><br><br> 
        <label for="">Address</label><br>
        <input type="text" placeholder="Address" name="address"><br><br> 
        <label for="">Class</label><br>
        <input type="text" placeholder="Class" name="Class"><br><br> 
        <label for="">Section</label><br>
        <input type="text" placeholder="A or B" name="Sec"><br><br> 
        <label for="">Email</label><br>
        <input type="email" placeholder="Students@gmail.com" name="Email"><br><br> 
           <button type="submit" id="save"> Save </button>
    </form>
</body>
</html>