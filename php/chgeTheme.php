<?php
	
	include("dblogin.php");
	session_start();
	
	$nextTheme = $_POST["nextTheme"];
	
	$sql = "UPDATE login SET theme=" . $nextTheme . " WHERE username=\"" . $_SESSION["userid"] . "\"";
	$result = mysql_query($sql);
	
	if($result) {
		header("Location: ../changeTheme.php?status=success");
	}//end if done
	else {
		die(mysql_error());
		header("Location: ../changeTheme.php?status=fail");
	}//end if failed
	
?>