<?php

	include("dblogin.php");
	include("getCurrentTheme.php");
	
	$sql = "SELECT * FROM themes";
	$result = mysql_query($sql);
	
	if (!$result) die(mysql_error());
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo '<option value="'. $row["theme_id"] .'"';
		if ($row["theme_id"] == $currentTheme) echo ' selected';
		echo '>'. $row["name"] . '</option>';
	}//end while

?>