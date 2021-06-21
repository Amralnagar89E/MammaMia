<?php
require 'Connect.php';
include 'user.php';
session_start();
$id=$_SESSION["id"];


$user=new user();
$user->set_uname(strtolower($_POST["name"]));
$user->set_email($_POST["email"]);
$user->set_address($_POST["Address"]);
$user->set_mobile($_POST["mobile"]);
$user->set_gender($_POST["gender"]);
$points=$_POST["points"];

$name=$user->get_uname();
$email=$user->get_email();
$mobile=$user->get_mobile();
$gender=$user->get_gender();


$sql="UPDATE register SET Username='$name',Email='$email',Mobile='$mobile',Address='$address',Gender='$gender',Points='$points' WHERE id='$id' ";

if($conn->query($sql)===TRUE)
{           
    header("Location:/MainPage/users.php");
}else{
    echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
}
