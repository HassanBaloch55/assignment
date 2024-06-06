<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
<nav>
    <?php

    include 'navbar.php';

        
      
    $conn =mysqli_connect("localhost","root","","Al_Hassan") or die("connection failed");
    
    $sql = "select * from Student";
    $result = mysqli_query($conn, $sql) or die("query unsuccess");

    ?>
    
    <table> 
               <h2>All Records Of Al Hassan Academy</h2>
   
       <thead >
      
        <th>
            Seriel No:
        </th>
        <th>
            Student_Id No:
        </th>
        <th>
             First Name
        </th>
        <th>
             Last Name
        </th>
        <th>
             Father Name
        </th>
        <th>
             Father Number
        </th>
        <th>
             D_O_B
        </th>
        <th>
            Class
        </th>
        <th>
           Class
        </th>
        <th>
            Section
        </th>
        <th>
            Email
        </th>
        <th>
            Action
        </th>
       </thead>
        <?php
            while ($row =mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <td><?php echo $row ['Id'] ?></td>
            <td><?php echo $row ['S_Id'] ?></td>
            <td><?php echo $row ['fname'] ?></td>
            <td><?php echo $row ['lname'] ?></td>
            <td><?php echo $row ['FatherName']?></td>
            <td><?php echo $row ['Father_Number'] ?></td>
            <td><?php echo $row ['D_O_B'] ?></td>
            <td><?php echo $row ['address'] ?></td>
            <td><?php echo $row ['Class'] ?></td>
            <td><?php echo $row ['Sec'] ?></td>
            <td><?php echo $row ['Email'] ?></td>
            <td><button id="edit">Edit</button> <a href="delform.php"><button id="delete">Delete</button></a></b></td>
            
          </tr>
        </tbody>
      <?php
            } 
      ?>
    </table>
</div>
</div>
</body>
</html>
