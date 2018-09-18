<?php

	$playlistID = $_GET["playlistid"];
	
	include("dblogin.php");
	$sql="SELECT * FROM playlists_tracks, tracks
		 WHERE playlists_tracks.playlist_id=" . $playlistID . "
		 AND playlists_tracks.track_id=tracks.track_id";
	$result=mysql_query($sql);
	
	if(!$result) die(mysql_error());
	
	$sqlGetPlaylistName = "SELECT name FROM playlists WHERE playlist_id=" . $playlistID;
	$SQLPNR = mysql_query($sqlGetPlaylistName); if(!$SQLPNR) die(mysql_error());
	while ($row = mysql_fetch_array($SQLPNR, MYSQL_ASSOC)) {
		echo '<h3> ' . $row["name"] . '</h3>';
	}
	
if (mysql_num_rows($result) == 0) { 
   echo '
   			<small> No tracks. Find a track and click "Add to playlist" to add it. </small>
		';
}//end if
else {
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo '
		
			<div class="trackItem">
   	        <p class="trackTitle">' . $row["name"] . ' - ' . $row["artist"] . ' <small>[' . $row["genre"] . ']</small></p>
			<audio preload="none" id="audioElement">
				<source src="' . $row["sample"] . '" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			<a class="buttonGreen" href="#" id="audioControl">PLAY</a>
   	         <a class="buttonBlue" href="track.php?trackid=' . $row["track_id"] . '"> MORE INFO </a>
			 <a class="buttonRed" href="php/deleteTrackFromPlaylist.php?trackid=' . $row["track_id"] . '&playlistid=' . $playlistID . '"> REMOVE FROM PLAYLIST </a>
   	         <div class="clearfloat"></div>
   	     	</div>
		';
	}//end while
}//end if tracks exist in playlist


?>