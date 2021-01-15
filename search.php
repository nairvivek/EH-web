<html>
<head></head>
<body>

<?php

include 'common.php';


$s= "SELECT name FROM records where email_address='$mailid' OR email_address = '$nmail_id'";
echo '$name';

?>


<div class="entry">

 <label for="Search">Search</label>
 <input type="text" placeholder="Search" id="nsearch" name="nsearch"<br><br>
</div>


<div class="entry10">
<input type="submit" value="Search">
</div>

</div>
</body>
</html>
