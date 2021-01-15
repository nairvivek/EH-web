<html>

<head></head>
<body>




<?php

$password1 = $_GET["upword"];
$mailid1 = $_GET["umailid"];
// collect emailid

//echo "<h5>Email Id : $mailid1 </h5>";
//echo " Password    : $password1 <br>";


include 'common.php';


$sql1 = "SELECT name FROM records WHERE email_address = '$mailid1' and password='$password1'";
  
  $result = $res->query($sql1);
  
  if($result->num_rows > 0)
  {
  	//while($row = $result->fetch_assoc())
  	$row = $result->fetch_assoc();
  	{
  	
  	  echo "<br><h2> Hi ". $row['name'] . "</h2>"; 
  	//echo " Authentication Success";
  	}
 
  }
  else
  {
  
  	echo "<br><br> Authentication Failed";
  	return;
  
  }
  

  
?>




<!-- <div class="topnav-right">
 <a href= "profile.php">View profile</a>
 </div>  -->
 
 <form action="profile.php" method="GET">
<div class = "add_c">
<label for = "addc_comments"> Type here</label>
<textarea class="form-control" id="addc_comments" rows="4"></textarea>
</div>


</form>

</body>
</html>

