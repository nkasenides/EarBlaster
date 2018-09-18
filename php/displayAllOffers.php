<?php
include("dblogin.php");

$sql="SELECT * FROM offers";
$result=mysql_query($sql);

if($result === FALSE) { 
   	die(mysql_error()); 
}

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
	
		   	<div class="trackItem">
            <img src="' . $row["image"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["title"] . ' image">
           <p class="trackTitle">' . $row["title"] . ' - $' . $row["price"] . '</p>
            <a class="buttonBlue" href="offer.php?offerTitle=' . $row["title"] . '"> MORE INFO </a>
            <div class="clearfloat"></div>
        </div>
	
	';
}//end while
		
		
?>