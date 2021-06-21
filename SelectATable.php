<html >
<head>
    <title>Table reservation</title>
    <link href="reserve.css" rel="stylesheet" type="text/css">
    </head>
<body >
<form method='post' action='ProcessSelectTable.php'>
    <div class="map">
           
  <div class="tables">

  <?php
         for($i=1;$i<17;$i++)
         {
         if($_GET['Taken']==$i)
         echo '<p style="color:red">Table Already Reserved</p>';
        }
         ?>
        <?php
        if($_GET)
        if($_GET['Taken']==1) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="1" id=t1>';
        ?>
        <label for="t1">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 1</a></p>
        </label>
        
        <?php
        if($_GET)
        if($_GET['Taken']==2) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="2" id=t2>';
        ?><label for="t2">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 2</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==3) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="3" id=t3>';
        ?>        <label for="t3">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 3</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==4) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="4" id=t4>';
        ?>        <label for="t4">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 4</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==5) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="5" id=t5>';
        ?>        <label for="t5">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 5</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==6) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="6" id=t6>';
        ?>        <label for="t6">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 6</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==7) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="7" id=t7>';
        ?>        <label for="t7">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 7</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==8) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="8" id=t8>';
        ?>        <label for="t8">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 8</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==9) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="9" id=t9>';
        ?>        <label for="t9">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
             <p><a class="la">Table 9</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==10) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="10" id=t10>';
        ?>        <label for="t10">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 10</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==11) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="11" id=t11>';
        ?>        <label for="t11">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 11</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==12) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="12" id=t12>';
        ?>        <label for="t12">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 12</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==13) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="13" id=t13>';
        ?>        <label for="t13">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 13</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==14) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="14" id=t14>';
        ?>        <label for="t14">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 14</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==15) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="15" id=t15>';
        ?>        <label for="t15">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 15</a></p>
        </label>
    
        <?php
        if($_GET)
        if($_GET['Taken']==16) 
        echo '<input type="radio" id=20>';
        else
        echo '<input type="radio" name="table" value="16" id=t16>';
        ?>        <label for="t16">
        <img src="https://img.icons8.com/ios/50/000000/restaurant-table.png">
            <p><a class="la">Table 16</a></p>
        </label>

    </div> 

        <div class="rsvbtn">
        <button type="submit" class="reserve">Reserve Now</button>
        </div>
        
    </div>
    
</form>
    </body>

</html>
