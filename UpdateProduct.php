<?php
include 'product.php';
require 'Connect.php';

session_start();
$id=$_SESSION["id"];
$product=new product($_POST["Category"],$_POST['ProductName'],$_POST['Quantity'],$_POST['Price'],$_POST['Discription']);
$ProductName=$product->get_ProductName();

$sqlPname = "SELECT * FROM productdb WHERE foodProducts='$ProductName'";
$resultname = $conn->query($sqlPname);

if($_POST["ProductName"] == $ProductName){
  $sql=$product->update($id,$product->get_category(),$product->get_ProductName(),$product->get_ProductDisc(),$product->get_Quantity(),$product->get_Price());
  if($conn->query($sql)===TRUE)
  {           
    header("Location: /MainPage/Menu.php");
    exit();
  }
  else
     echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
     $conn->close(); 
  }
elseif ($resultname->num_rows > 0) 
   {
      header("Location: /MainPage/MenuReg.php?error=Product already exists");
      exit();
    
    }
?>