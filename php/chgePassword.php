<?php

include("dblogin.php");
session_start();

$newPassword = $_POST["newPassword"];
$confirmPassword = $_POST["confirmPassword"];

if ($newPassword != $confirmPassword) 
	header("Location: ../changePassword.php?status=nomatch");
else {
	$sql="UPDATE login SET password=\"" . $newPassword . "\" WHERE username=\"" . $_SESSION["userid"] . "\"";
	$result=mysql_query($sql);

	if($result) {
		header("Location: logout.php?status=pwdChanged");
	}//end if done
	else {
		die(mysql_error());
		header("Location: ../changePassword.php?status=fail");
	}//end if failed
}//end if matching
	
?>