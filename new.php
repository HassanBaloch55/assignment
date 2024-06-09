<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<style>
  .srch{
      height: auto;
      width: 30%;
      padding: 10px 10px;
   }
   .srch::placeholder{
   font-size: 1.5em;
    color:red;
    text-align: center;
   }
</style>
<body>
<nav>
    <?php

    include 'navbar.php';
    include 'find.php';
  
    ?>
    <table> 
               <h2> <?php 
               if (mysqli_num_rows($result) > 0) {
                echo "Your Search Result Is Here" ;
            } 
           else  if (mysqli_num_rows($result) == false) {
                    echo "Please Type Valid Id Number";
           }

            else {
              echo "Please Type Student Id ";
            } ?> </h2>
                 <h2> 
                    <form action="new.php" method="post" id="search_form" >
                       <input type="text" name="S_Id" class="srch" placeholder="Enter Student_Id for Records">
                     </form>
                 </h2>
       <thead >
      
        <th> Seriel No:</th>
        <th> Student_Id No:</th>
        <th>  First Name </th>
        <th> Last Name </th>
        <th> Father Name </th>
        <th>  Father Number </th>
        <th>  D_O_B </th>
        <th> Class </th>
        <th>  Class </th>
        <th> Section  </th>
        <th> Email </th>
        <th>Action</th>
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

</body>
</html>
