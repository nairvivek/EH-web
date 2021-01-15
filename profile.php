<html>

<head></head>
<body>


<form action="search.php" method="GET">


<div class="topnav">

<?php

include 'common.php';

$sql2 = "SELECT name, email_address FROM records WHERE name = '$username1' AND  email_address = '$mailid1'";

  $c_query=mysqli_query($res, $sql2);
 
  $f_query=mysqli_fetch_fields($c_query);
   
     echo "Hi" $name;
     
                                  //update name, email address
     
  
?>





<form>

<div class="topnav-right">                                                <!-- update name, email address -->  
 <a href= "update_name.php">$name</a>
 <a href= "update_email.php">$email</a>
 </div>  
 
 
<div class = "add_c">
<label for = "addc_comments"> Type here</label>
<textarea class="form-control" id="addc_comments" rows="4"></textarea>
</div>


</form>
</body>
</html>

