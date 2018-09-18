<?php
include("dblogin.php");

$sql="SELECT * FROM tracks";
$result=mysql_query($sql);

if($result === FALSE) { 
   	die(mysql_error()); 
}

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$trackID = $row["track_id"];
	echo '
	
		   	<div class="trackItem">
            <img src="' . $row["thumb"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["name"] . ' image">
           <p class="trackTitle">' . $row["name"] . ' - ' . $row["artist"] . ' <small>[' . $row["genre"] . ']</small></p>
            <a class="buttonBlue" href="track.php?trackid=' . $row["track_id"] . '"> MORE INFO </a>			
			
		<div class="dropdownMenuP">
  		<button class="dropButtonP">ADD TO PLAYLIST</button>
  			<div class="dropdownContentP">';
			echo '<h4 style="color:black;"> Insert to Playlist: </h4>';
			include("php/printPlaylistsAsOptions.php");
  			echo '
			</div>
		</div>
			
			
			<div class="clearfloat"></div>
        	</div>

	
	';
}//end while
		
		
?>