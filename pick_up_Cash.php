<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pickup</title>
	<link rel="stylesheet" href="pu.css">
   
</head>     
<body>

<div class="wrapper">
  <div class="container">
    <div class="title">Pick up</div>
    <form method="post" action="processPUCash.php">

    <div class="input-form">
      <div class="section-1">
                  <div class="items">
          <label class="label">Full Name</label>
          <input type="text" class="input"  name="name"/required/>
             
       
        </div>
      </div>
      <div class="section-2">
            <div class="items">
          <label class="label">Phone number</label>
          <input type="tel" class="input" data-mask="00000000000" placeholder="Phone Number" name="phone"/required/>
        </div>
      </div>
         
    </div>
    
    <div style="text-align: center"><button type="submit" class="btn">Procced</button></div>
</form>    
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
</body>
</html>