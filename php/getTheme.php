<?php

	include("dblogin.php");
	session_start();
	$user = $_SESSION["userid"];
	
	$sql = "SELECT theme FROM login WHERE username=\"" . $user . "\"";
	$result = mysql_query($sql);
	$currentTheme;
	
	if (!$result) die(mysql_error());
	else {
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$currentTheme = $row["theme"];
		}//end while
	}//endif
	

?>