<?php
require 'Connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Menu</title>
    <link href="sidenavbar.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 </head>
<body>
 <div id="sidebar">
     <h2>Mamma Mia</h2>
  <ul>
   <li><a href="menu.php"> Menu </a></li>
   <li><a href="reserv.php">Reservations</a></li>
   <li><a href="Orders.php">Orders</a></li>
   <li><a href="users.php">Users</a></li>
   <li><a href="logout.php">Log-out</a></li>
  </ul>
 </div>
    <div class="mainpage">
        <style>table {
  border-collapse: collapse;
  width: 100%;
  color: #588c7e;
  font-family: cursive;
  font-size: 25px;
  text-align: center;
  }
  th {
  background-color: #588c7e;
  color: white;
  }
  tr:nth-child(even) {background-color: #f2f2f2}</style>
      <table>
         <tr>
         <th>Id</th>
         <th>Username</th>
         <th>Email</th>
         <th>Mobile</th>
         <th>Address</th>
         <th>Gender</th>
         <th>Reser Num</th>
         <th>Ponits</th>
         <th>Edit</th>
         <th>Delete</th>


         </tr>
         <?php
         $sql = "SELECT * FROM register";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             {
                $id=$row["id"];
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Username"] . "</td><td>"
         . $row["Email"]."</td><td>".$row["Mobile"]."</td><td>".$row["Address"]."</td><td>"
         .$row["Gender"]."</td><td>".$row["NReservations"]."</td><td>".$row["Points"]
         ."</td><td>"."<a href='Edit.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf044;</i></a> '.
         "</td><td>"."<a href='Delete.php?id=$id' style='color:red'>".'<i style="font-size:24px"  class="fa">&#xf2ed;</i></a>
         '."</td></tr>";
             }
         
         }
         echo "</table>";
         } else { echo "0 results"; }
         $conn->close();
         ?>
         </table>    
    </div>
</body>
</html>

