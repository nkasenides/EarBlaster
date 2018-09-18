<?php

include("dblogin.php");
$playlistName = $_POST["name"];
$user = $_GET["userid"];
$sql="SELECT name FROM playlists";
$result=mysql_query($sql);

$flag = false;
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	if (trim(strtolower($playlistName)) == trim(strtolower($row["name"]))) {
		$flag = true;
		break;
	}//end if
}//end while

if ($flag) {
	header ('Location: ../addPlaylist.php?status=exists');
}//end if playlist exists
else {
	$sqlInsert = "INSERT INTO playlists (name, owner)
	VALUES ('". $playlistName . "', '" . $user . "')";
	$resultInsert = mysql_query($sqlInsert);
	if(! $resultInsert ) {
		header ('Location: ../addPlaylist.php?status=fail');
		die(mysql_error());
    }//end if playlist not created
	else {
   		header ('Location: ../myPlaylists.php?status=created');
		die(mysql_error());
	}//end if playlist created
}//end if playlist name doesnt exist
	
?>