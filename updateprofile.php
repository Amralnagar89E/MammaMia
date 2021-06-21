<?php
require 'Connect.php';
include 'user.php';

if(isset($_SESSION['name1']))
$name=$_SESSION['name1'];
$sql = "SELECT * FROM register WHERE Username = '$name'";
$result = $conn->query($sql);
$user=new user();
if($result->num_rows>0)
{
    $row = $result->fetch_assoc();

    $user->userCons($row['Username'],$row['Password'],$row['Email'],$row['Mobile'],$row['Address'],$row['Gender'],$row['NReservations'],$row['Points']);
    $_SESSION['name1']=$row['Username'];
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Profile</title>
    <link href="style.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-dark site_navbar site-navbar-light" id="site-navbar">
                <div class="container">
				<a class="navbar-brand" href="main.php"><font size="5">MAMMA MIA</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
          
                  <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="main.php#section-home" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="main.php#section-about" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="main.php#section-specials" class="nav-link">Specials</a></li>
                      <li class="nav-item"><a href="index.php" class="nav-link">Menu</a></li>
                      <?php 
                      if(isset($_SESSION['loggedin']) &&isset($_SESSION['loggedin'])==true)
                      {
                        echo "<li class='nav-item'><a href='logout.php' class='nav-link'>Log Out</a></li>";
                        echo "<li class='nav-item'><a href='profile.php' class='nav-link'>$name</a></li>";    
                      }
                      else
                      {
                        echo "<li class='nav-item'><a href='main.php#section-register'class='nav-link'>Register</a></li>";
                        echo "<li class='nav-item'><a href='log.php'class='nav-link'>Log in</a></li>";
                      }
                      ?>
                      <li class="nav-item"><a href="main.php#section-contact" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="InResturant.php"class="nav-link">In Restaurant</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
             
 <form method="post" action="processprof.php">
    <div class="container">
        <div class="info">
        <?php 

if($_GET)

if($_GET['error'] =='WrongUserNameFormat')
echo '<p style="color:red">Wrong Username Format</p>';
elseif($_GET['error'] =='UserNameTaken')
echo '<p style="color:red">Username Already Taken</p>';
elseif($_GET['error'] =='EmailTaken')
echo '<p style="color:red">Email Already Taken</p>';
elseif($_GET['error'] =='MobileTaken')
    echo '<p style="color:red">Mobile Already Taken</p>';
elseif($_GET['error'] =='PasswordError')
    echo '<p style="color:red">Wrong Password</p>';

?>	
            <h4 class="h4"style="color:red">UserName</h4>
            <input type="name" class="input-box"  placeholder="Your Name..." name="name"maxlength="8"minlength="4"
            value="<?php echo $user->get_uname();?>" </required/><br>
            <h4 class="h4"style="color:red">Email</h4>
            <input type="name" class="input-box"  placeholder="Your EMail..." name="email"minlength="11"          
           value="<?php echo $user->get_email();?>" </required/><br>
            <h4 class="h4"style="color:red">Mobile</h4>
            <input type="number" class="input-box"  placeholder="Mobile..."name="mobile" minlength="11"
            value="<?php echo $user->get_mobile();?>" </required/><br>
            <h4 class="h4"style="color:red">Address</h4>
            <input type="address" class="input-box"  placeholder="Address..."name="address" minlength="15"
            value="<?php echo $user->get_address();?>" </required/><br>
            <h4 class="h4"style="color:red">Confirm Password</h4>
            <input type="password" class="input-box"  placeholder="Password..."name="password" minlength="8" </required/><br>
            <hr>
            <div style="text-align:center">
            <td><button type="submit" class="signbtn">Confirm</button>

        </div>
        </div></form>
</body>
</html>