<?php

	$trackID = $_GET["trackid"];
	
	include("dblogin.php");
	$sql="SELECT * FROM tracks WHERE track_id=" . $trackID;
	$result=mysql_query($sql);
	
if($result === FALSE) { 
   	die(mysql_error());
}
	
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo $row["name"];
}//end while



?>