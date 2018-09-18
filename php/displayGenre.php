<?php

	$genreName = $_GET["genreName"];
	
	include("dblogin.php");
	$sql="SELECT * FROM tracks WHERE genre=\"" . $genreName . "\"";
	$result=mysql_query($sql);
	
	echo '<h2>' . $genreName . '</h2>';
	
	$sqlCount = "SELECT COUNT(*) FROM tracks WHERE genre=\"" . $genreName . "\"";
	$resultCount=mysql_query($sqlCount);
	echo mysql_error();
	$count = mysql_result($resultCount, 0, 0);
	echo '<p>Total Tracks: <i>' . $count . '</i></p>';
	
if($result === FALSE) { 
   	die(mysql_error());
}

	
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$trackID = $row["track_id"];
	echo '
		   	<div class="trackItem">
        	<p class="trackTitle">' . $row["name"] . '</p>
            <img src="' . $row["thumb"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["name"] . ' image">
            <p>
            <span>Track: </span> ' . $row["name"] . ' <br>
            <span>Artist: </span> ' . $row["artist"] . ' <br>
            <span>Album: </span> ' . $row["album"] . ' <br>
            <span>Genre: </span> ' . $row["genre"] . ' <br>
            </p>
            <a class="buttonBlue" href="track.php?trackid=' . $row["track_id"] . '"> MORE INFO </a>
		<div class="dropdownMenuP">
  		<button class="dropButtonP">ADD TO PLAYLIST</button>
  			<div class="dropdownContentP">';
			echo '<h4 style="color:black;"> Insert to Playlist: </h4>';
			include("php/printPlaylistsAsOptionsExtraVars.php");
  			echo '
			</div>
		</div>
			
			<div class="clearfloat"></div>
        </div>
	
	';
}//end while



?>