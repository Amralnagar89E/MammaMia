<?php
require 'Connect.php';
session_start();
$rando=$_SESSION['rando'];
$table=$_POST['table'];

$sqlname = "SELECT * FROM reserve WHERE tableno='$table'";
$resultname = $conn->query($sqlname);
if ($resultname->num_rows > 0) 
{
   header("Location: /MainPage/SelectATable.php?Taken=$table");
   exit();
 
 }

$sql="UPDATE reserve SET tableno='$table' WHERE rando='$rando'";
if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/ask4food.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}

