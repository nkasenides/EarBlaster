<?php

	$offerTitle = $_GET["offerTitle"];
	
	include("dblogin.php");
	$sql="SELECT * FROM offers WHERE title=\"" . $offerTitle . "\"";
	$result=mysql_query($sql);
	
if($result === FALSE) { 
   	die(mysql_error());
}

	
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
		   	<div class="trackBlock">
            <img src="' . $row["image"] . '" width="150px" height="150px" class="trackImage" alt="' . $row["title"] . ' image">
           <p class="trackTitle">' . $row["title"] . ' - $' . $row["price"] . '</p>
            <p>' . $row["description"] . '</p>
			<div class="clearfloat"></div>
        </div>
	
	';
}//end while



?>