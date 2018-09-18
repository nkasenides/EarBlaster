<?php

include("dblogin.php");
session_start();

$user = $_SESSION["userid"];

//DELETE USER
$sql = "DELETE FROM login WHERE username=\"" . $user . "\"";
$result = mysql_query($sql);

//DELETE HIS PLAYLISTS
$sql2 = "DELETE FROM playlists WHERE owner=\"" . $user . "\"";
$result2 = mysql_query($sql2);

//DELETE HIS REVIEWS
$sql3 = "DELETE FROM reviews WHERE name=\"" . $user . "\"";
$result3 = mysql_query($sql3);

if ($result && $result2 && $result3) 
	header("Location: logout.php?status=accDeleted");	
else {
	die(mysql_error());
	header("Location: ../myAccount.php?status=accFail");	
}//end if

?>