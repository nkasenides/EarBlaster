<?php

include("dblogin.php");

$playlistID = $_GET["playlistid"];
$trackID = $_GET["trackid"];


$sql="DELETE FROM playlists_tracks WHERE track_id=" . $trackID . "
		AND playlist_id=" . $playlistID;
$result=mysql_query($sql);
	
if(!$result) {
	header ('Location: ../playlist.php?playlistid=' . $playlistID . '&status=error&trackid=' . $trackID);
}//end if not deleted
else {
	header ('Location: ../playlist.php?playlistid=' . $playlistID . '&status=ok&trackid=' . $trackID);
}//end if deleted


?>