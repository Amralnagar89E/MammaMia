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
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Profile</title>
    <link href="css/stylepro.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body >
      <nav class="navbar navbar-expand-lg navbar-dark site_navbar  site-navbar-light" id="site-navbar">
          <div class="container">
            <a class="navbar-brand" href="main.php">Mamma Mia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
          </div>
        </nav>
    </head>
	<body>    

	<div class="profile">
    <h1 >Profile</h1>

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
	?>
	<form method="post" action="#">
    <label class="label">UserName</label>
    <br>
	<input type="name" class="input-box"  placeholder="Your Name..." name="name"maxlength="8"minlength="4" 
    value="<?php echo $user->get_uname();?>" </required/><br><br>
    <label class="label">Password</label>
    <br><input type="password" class="input-box"  placeholder="Password... "name="password" minlength="8" maxlength="16"/required/><br><br>
    <labe class="label"l>E-mail</label>
	<br><input type="email" class="input-box"  placeholder="E-mail..."name="email" minlength="11" 
    value="<?php if($_GET)echo $_SESSION['email'];?>"/required/><br><br>
    <label class="label">Mobile</label>
	<br><input type="number" class="input-box"  placeholder="Mobile..."name="mobile" maxlength="11"
    value="<?php if($_GET)echo $_SESSION['mobile'];?>"/required/><br><br>
    <label class="label">Address</label>
	<br><input type="address" class="input-box"  placeholder="Address..."name="address" minlength="15"
	value="<?php if($_GET)echo $_SESSION['address'];?>"/required/><br><br>
    <div style="text-align:center;">
    <td><button type="submit">Confirm</button></div>
    
	</form>
	</div>

	</body>
</html>