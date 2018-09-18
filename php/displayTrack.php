<?php

	$trackID = $_GET["trackid"];
	
	include("dblogin.php");
	$sql="SELECT * FROM tracks WHERE track_id=" . $trackID;
	$result=mysql_query($sql);
	
	if($result === FALSE) die(mysql_error());
	
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo '
	
        	<h3 class="descriptionTrackTitle">' . $row["name"] . '</h3>
            <img src="' . $row["thumb"] . '" width="100px" height="100px" class="trackImage" alt="' . $row["name"] . ' image">
            <p>
            <span>Track: </span> ' . $row["name"] . ' <br>
            <span>Artist: </span> ' . $row["artist"] . ' <br>
            <span>Album: </span> ' . $row["album"] . ' <br>
            <span>Genre: </span> ' . $row["genre"] . ' <br>
            </p>
			
			<audio preload="none" id="audioElement">
				<source src="' . $row["sample"] . '" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			<a class="buttonRed" href="#" id="audioControl">PLAY</a>
		<div class="dropdownMenuP">
  		<button class="dropButtonP">ADD TO PLAYLIST</button>
  			<div class="dropdownContentP">';
			echo '<h4 style="color:black;"> Insert to Playlist: </h4>';
			include("php/printPlaylistsAsOptionsExtraVars.php");
  			echo '
			</div>
		</div>
			<br>
			<span>Description:</span><br>
			<i>' . $row["description"] . '</i>
			<hr>
			<h4><u>Reviews:</u></h4>			
            <div class="clearfloat"></div>
	';
}//end while

$sqlReview = "SELECT * FROM reviews WHERE product_id=" . $trackID;
$sqlReviewResult = mysql_query($sqlReview);

if ($sqlReviewResult === FALSE) die(mysql_error());

if (mysql_num_rows($sqlReviewResult) == 0) { 
   echo '
   			<small> No reviews </small>
			<br>
		';
}//end if no reviews
else { 

	while ($row = mysql_fetch_array($sqlReviewResult, MYSQL_ASSOC)) {
		
	if (strtolower($row['name']) == $currentUser) {
		echo "
			<div class='reviewCU'>
			<p><b>You</b> wrote: <br>
			<i>\"" . $row['review'] . "\"</i><br>
			<b>Rating: " . $row['rating'] . "</b></p>
			<a href='php/deleteReview.php?reviewid=" . $row['review_id'] . "&trackid=" . $row['product_id'] . "'> Delete </a>
			</div>
			<br>
		";
	}//end if current user
	else {
		echo "
			<div class='review'>
			<p><b>" . $row['name'] . "</b> wrote: <br>
			<i>\"" . $row['review'] . "\"</i><br>
			<b>Rating: " . $row['rating'] . "</b></p>
			</div>
			<br>
			
		";
		}//end not current user
	
	}//end while

}//end if reviews 



?>