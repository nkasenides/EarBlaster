<?php

$playlistID = $_GET["playlistid"];

include("dblogin.php");
$sql="DELETE FROM playlists WHERE playlist_id=" . $playlistID;
$result=mysql_query($sql);
	
if(!$result) {
	header ('Location: ../myPlaylists.php?userid=' . $_SESSION["userid"] . '&status=error');
}//end if not deleted
else {
	header ('Location: ../myPlaylists.php?userid=' . $_SESSION["userid"] . '&status=ok');
}//end if deleted


?>