<?php
include("dblogin.php");

$user = $_SESSION["userid"];

$sqlx="SELECT * FROM playlists WHERE owner=\"" . $user . "\"";
$resultx=mysql_query($sqlx);

if($resultx === FALSE) die(mysql_error());

if (mysql_num_rows($resultx) == 0) { 
   echo '
   			<small> You have no playlists yet. </small>
		';
}//end if

while ($rowx = mysql_fetch_array($resultx, MYSQL_ASSOC)) {
	echo '
	
	 <a href="php/insertTrackToPlaylistExtraVars.php?trackid=' . $trackID . '&playlistid=' . $rowx["playlist_id"] . '">'
	  . $rowx["name"] . '</a>';
	 
}//end while
		
		
?>