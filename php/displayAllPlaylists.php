<?php
include("dblogin.php");

$user = $_SESSION["userid"];

$sql="SELECT * FROM playlists WHERE owner=\"" . $user . "\"";
$result=mysql_query($sql);

if($result === FALSE) { 
   	die(mysql_error()); 
}

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
	
		   	<div class="trackItem">
           <p class="trackTitle">' . $row["name"] . '</p>
            <a class="buttonBlue" href="playlist.php?playlistid=' . $row["playlist_id"] . '"> VIEW </a>
			 <a class="buttonRed" onclick="return confirm(\'Are you sure you would like to delete this playlist? \nIt will be deleted forever (A long time!)\');" 
			 href="php/deletePlaylist.php?playlistid=' . $row["playlist_id"] . '"> DELETE PLAYLIST </a>
            <div class="clearfloat"></div>
        	</div>
	
	';
}//end while
		
		
?>