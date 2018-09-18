<?php
	
	include("dblogin.php");
	
	$sql = "SELECT theme FROM login WHERE username=\"" . $_SESSION["userid"] . "\"";
	$result = mysql_query($sql);
	$currentTheme;
	
	if($result) {
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$currentTheme = $row["theme"];
		}//end while
	}//end if done
	else {
		die(mysql_error());
	}//end if failed
	
?>