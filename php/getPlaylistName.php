<?php
$playlistID = $_GET["playlistid"];
	
include("dblogin.php");
$sqlGetPlaylistName = "SELECT name FROM playlists WHERE playlist_id=" . $playlistID;
$SQLPNR = mysql_query($sqlGetPlaylistName); if(!$SQLPNR) die(mysql_error());

while ($row = mysql_fetch_array($SQLPNR, MYSQL_ASSOC)) {
	echo  $row["name"];
}
	
?>