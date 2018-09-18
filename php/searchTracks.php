<?php
include("dblogin.php");

$keyword = $_POST["keyword"];

$sql="SELECT * FROM tracks WHERE
	  LCASE(name) LIKE \"%" . strtolower($keyword) . "%\" OR
	  LCASE(genre) LIKE \"%" . strtolower($keyword) . "%\" OR
	  LCASE(album) LIKE \"%" . strtolower($keyword) . "%\" OR
	  LCASE(artist) LIKE \"%" . strtolower($keyword) . "%\"";
$result=mysql_query($sql);

if($result === FALSE) { 
   	die(mysql_error()); 
}

if (mysql_num_rows($result) == 0) { 
   echo '
   			<small> No results </small>
		';
}//end if no results 
	else {
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo '
		
			   	<div class="trackItem">
   	         <img src="' . $row["thumb"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["name"] . ' image">
   	        <p class="trackTitle">' . $row["name"] . ' - ' . $row["artist"] . ' <small>[' . $row["genre"] . ']</small></p>
   	         <a class="buttonBlue" href="track.php?trackid=' . $row["track_id"] . '"> MORE INFO </a>
   	         <div class="clearfloat"></div>
    	    	</div>
		
		';
	}//end while
}//end if results exist
		
?>