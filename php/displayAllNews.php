<?php
include("dblogin.php");

$sql="SELECT * FROM news ORDER BY time DESC";
$result=mysql_query($sql);

if($result === FALSE) die(mysql_error());

if (mysql_num_rows($result) == 0) { 
   echo '
   			<small> No news </small>
		';
}//end if no news
else {  

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo '
		
			<div class="menuItem">
				
				<h3 style="display:inline">' . $row["title"] . '</h3><br>
				<small>' . $row["time"] . '</small><br><br>
				<p>' . $row["description"] . '</p>
			
			</div>
			
			<div class="clearfloat"></div>
		
		';
	}//end while
}//end if news
		
?>