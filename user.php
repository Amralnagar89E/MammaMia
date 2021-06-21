<?php
session_start();
class user 
{

    private $uname;
    private $password;
    private $email;
    private $mobile;
    private $address;
    private $gender;
    private $nreservations=0;
    private $points=50;

   function userCons($uname,$password,$email,$mobile,$address,$gender,$nreservations,$points)
    {
   
      
       $this->uname = $uname;
       $this->password=$password;
       $this->email=$email;
       $this->mobile=$mobile;
       $this->address=$address;
       $this->gender=$gender;
       $this->nreservations=$nreservations;
       $this->points=$points;
    }

    function DeleteResByAdmin($uname)
    {
      include 'Connect.php';

      $sql_user="SELECT * FROM register WHERE Username='$uname'";
      $res_user=$conn->query($sql_user);
      if($res_user->num_rows >0)
        
        $row_user=$res_user->fetch_assoc();
        $points=$row_user['Points'];
        $nreservation=$row_user['NReservations'];
        $points-=20;
        $nreservation--;        
    $sql_update="UPDATE register SET NReservations='$nreservation',Points='$points' WHERE Username='$uname'";
    if($conn->query($sql_update)===FALSE)        
        echo"ERROR!!!!!!!".$sql_update."<br>".$conn->error;
    }
    
    function updatepoints4res($uname)
    {
      include 'Connect.php';
      $sql = "SELECT * FROM register WHERE Username='$uname' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) 
          $row = $result->fetch_assoc();

      $points=$row['Points'];
      $nreservation=$row['NReservations'];
      $nreservation++;
      $points+=20;
      $sql="UPDATE register SET NReservations='$nreservation',Points='$points' WHERE Username='$uname' ";
      if($conn->query($sql)===FALSE)
            echo"ERROR!!!!!!!".$sql."<br>".$conn->error;
             
  }
    
    function set_uname($uname) {
        $this->uname = $uname;
      }
      function get_uname() {
        return $this->uname;
      }
      function set_password($password) {
        $this->password = $password;
      }
      function get_password() {
        return $this->password;
      }
      function set_email($email) {
        $this->email = $email;
      }
      function get_email() {
        return $this->email;
      }
      function set_mobile($mobile) {
        $this->mobile = $mobile;
      }
      function get_mobile() {
        return $this->mobile;
      }
      function set_address($address) {
        $this->address = $address;
      }
      function get_address() {
        return $this->address;
      }
      function set_gender($gender) {
        $this->gender = $gender;
      }
      function get_gender() {
        return $this->gender;
      }
      function set_nreservations($nreservations) {
        $this->nreservations += 1;
        $this->points+=20;
      }
      function get_nreservations() {
        return $this->nreservations;
      }
      function get_points() {
        return $this->points;
      }

      function insert($uame,$password,$email,$mobile,$address,$gender,$points)
      {
        $sql="INSERT INTO register(Username,Password,Email,Mobile,Address,Gender,Points) VALUES('$uame','$password','$email','$mobile','$address','$gender','$points')";
        return $sql;
      }
    }
  