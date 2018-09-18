<?php
include("dblogin.php");
$trackID = $_GET["trackid"];
$playlistID = $_GET["playlistid"];


$sqlFind = "SELECT * FROM playlists_tracks WHERE track_id=" . $trackID . "
			AND playlist_id=" . $playlistID;
$sqlFindResult = mysql_query($sqlFind);

$flag = false;
while ($row = mysql_fetch_array($sqlFindResult, MYSQL_ASSOC)) {
	if (strtolower($trackID) == $row["track_id"]) {
		$flag = true;
		break;
	}//end if
}//end while

if ($flag) {
	header ('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=trackExists&trackid=' . $trackID);
}//end if track exists
else {
	$sqlInsert = "INSERT INTO playlists_tracks(playlist_id, track_id) 
		VALUES (" . $playlistID . "," . $trackID . ")";
	$resultInsert = mysql_query($sqlInsert);
	if(! $resultInsert ) {
		die(mysql_error());
		header ('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=trackFail&trackid=' . $trackID);
	}//end if failed
	else {
		header ('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=trackOk&trackid=' . $trackID);
	}//end if success
}//end if track doesnt exist
	
?>