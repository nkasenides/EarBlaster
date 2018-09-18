<?php
include("dblogin.php");

$sql="SELECT DISTINCT(genre) FROM tracks";
$result=mysql_query($sql);

if($result === FALSE) { 
   	die(mysql_error());
}

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
	
	<li><a href="genre.php?genreName=' . $row["genre"] . '">' . $row["genre"] . '</a></li>';
	
}//end while
		
		
?>