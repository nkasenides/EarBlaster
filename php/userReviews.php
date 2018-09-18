<?php
include("dblogin.php");

$user = $_GET["userid"];

$sql="SELECT * FROM reviews, tracks WHERE LOWER(reviews.name)=\"" . $user . "\" 
AND reviews.product_id=tracks.track_id";
$result=mysql_query($sql);

if($result === FALSE) die(mysql_error()); 

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
	
		   	<div class="trackItem">
            <img src="' . $row["thumb"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["name"] . ' image">
           <p class="trackTitle">' . $row["name"] . ' - ' . $row["artist"] . ' <small>[' . $row["genre"] . ']</small></p>
            <a class="buttonBlue" href="track.php?trackid=' . $row["track_id"] . '"> MORE INFO </a>
            <div class="clearfloat"></div>
			
			<p> <span>You wrote:</span><br>
			<i>' . $row["review"] . '</i></p>
			
        	</div>
	
	';
}//end while
		
		
?>